<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Models\User;

class TicketController extends Controller
{
    function index() {
        $tickets = Ticket::all(); 
        return view('viewtiket', ['tickets' => $tickets]);
    }

    function store(Request $request) {
        $validatedData = $request->validate([
            'ticket_id' => 'required|exists:tickets,id',
            'name_buyer' => 'required|min:5|max:255',
            'email' => 'required|min:10|unique:users',
            'qyt' => 'required|in:male,female'
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        Ticket::create($validatedData);

        return redirect('/login')->with('success','Registration successfull! Please login');
    }
}
