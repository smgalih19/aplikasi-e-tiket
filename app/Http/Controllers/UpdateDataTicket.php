<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class UpdateDataTicket extends Controller
{
    public function index(){
        return view('dashboard.history-ticket.index',[
            'transactions' => Transaction::orderBy('created_at', 'desc')->get()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'external_id' => 'required|max:255',
            'name_buyer' => 'required|max:255',
            'phone_number' => 'required|min:10|max:15',
            'date_ticket' => 'required',
        ]);
        
        Transaction::create($validatedData);

        Alert::success('Success!', 'Menambahkan Data Ticket');
        return redirect('/dashboard/history-ticket');
    }

    public function edit($id)
    {
        $history = DB::table('transactions')->where('id', $id)->first();
        return view('dashboard.history-ticket.edit', [
            'transactions' => $history
        ]);
    }

    public function update(Request $request, $id)
    {

        $transaction = Transaction::findOrFail($id);

        if ($transaction->update($request->all())) {
            Alert::success('Success!', 'Mengedit Data Order Pengunjung');
            return redirect('dashboard/history-ticket');
        }
    
        Alert::error('Error!', 'Gagal mengedit data order pengunjung');
        return redirect()->back()->withInput();
    }    

    public function destroy($id)
    {
        DB::table('transactions')->where('id', $id)->delete();

        Alert::success('Success!', 'Menghapus Data Order Pengunjung');
        return redirect()->back();
    }
}
