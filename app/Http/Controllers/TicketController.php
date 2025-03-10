<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\User;
use DateTime;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class TicketController extends Controller
{
    function index() {
        $tickets = Ticket::all(); 
        return view('viewtiket', ['tickets' => $tickets]);
    }

    function store(Request $request) {
        $ticket = Ticket::findOrFail($request['ticket_id']);

        $user_id = auth()->user()->id;

        $external_id = 'TICKET-'.$request['ticket_id'] . '-' . $user_id . '-' . Str::slug($request['name_buyer'].'-' . Str::random(10));
        $xendit_payload = [
            'external_id' => $external_id,
            'amount' => $ticket->price * intval($request['qty']),
            'customer' => [
                'given_names' => $request['name_buyer'],
                'email' => $request['email'],
                'mobile_number' => $request['phone_number'],
            ],
            'success_redirect_url' => URL::to('/dashboard-user'),
            'failure_redirect_url' => URL::to('/viewtiket'),
        ];

        $dataRequest = Http::withHeaders([
            'Authorization' => 'Basic ' . config('app.xendit_api_key'),
        ])->post('https://api.xendit.co/v2/invoices', $xendit_payload);

        $response = $dataRequest->json();

        Transaction::create([
            'user_id' => $user_id,
            'ticket_id' => $ticket->id,
            'external_id' => $external_id,
            'qty' => $request['qty'],
            'name_buyer' => $request['name_buyer'],
            'email' => $request['email'],
            'phone_number' => $request['phone_number'],
            'qty' => $request['qty'],
            'amount' => $response['amount'],
            'status_transaction' => $response['status'],
            'expired_date_transaction' => $response['expiry_date'],
            'data_payment_gateway' => json_encode($response),
            'date_ticket' => $request['date_ticket'],
            'invoice_url' => $response['invoice_url'],
        ]);

        return Redirect::to($response['invoice_url']);
    }
}
