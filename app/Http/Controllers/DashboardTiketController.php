<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardTiketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.data-ticket.index', [
            'tickets' => Ticket::all()
        ]);
    }

    public function history()
    {
        return view('dashboard.history-ticket.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.data-ticket.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric|gt:0',
            'description' => 'required',
        ]);

        Ticket::create($validatedData);

        Alert::success('Success!', 'Menambahkan Data Ticket');
        return redirect('/dashboard/data-ticket');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $ticket = DB::table('tickets')->where('id', $id)->first();
        return view('dashboard.data-ticket.edit', [
            'ticket' => $ticket
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric|gt:0',
            'description' => 'required',
        ]);
        
        Ticket::where('id', $id)
            ->update($validatedData);

        Alert::success('Success!', 'Mengedit Data Ticket');
        return redirect('/dashboard/data-ticket');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::table('tickets')->where('id', $id)->delete();

        Alert::success('Success!', 'Menghapus Data Ticket');
        return redirect()->back();
    }
}
