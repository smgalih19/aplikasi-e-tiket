<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function index(){
        return view('dashboard.index', [
            'users' => User::where('is_admin',0)->count(),
            'tickets' => Ticket::all()->count(),
            'transaction' => Transaction::all()->count()
        ]);
    }
}
