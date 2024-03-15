<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardUserController extends Controller
{
    public function index(){
        return view('dashboard-user.index', [
            "transactions" => Transaction::where('user_id', auth()->user()->id)->count()
        ]);
    }
}
