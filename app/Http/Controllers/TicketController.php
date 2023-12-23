<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    function index() {
        $tickets = Ticket::all(); 
        return view('viewtiket', ['tickets' => $tickets]);
    }
}
