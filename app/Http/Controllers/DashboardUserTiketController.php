<?php

namespace App\Http\Controllers;

use App\Models\DashboardUser;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Facade;

class DashboardUserTiketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard-user.data-user.index');
    }

    public function order()
    {
        return view('dashboard-user.data-order.index', [
            "transactions" => Transaction::where('user_id', auth()->user()->id)
                                        ->orderBy('created_at', 'desc')->get()
        ]);
    }

    public function downloadPdf()
    {
        $data = []; // Siapkan data yang ingin Anda tampilkan di PDF
        
        // Load view dengan data yang disiapkan
        $pdf = Facade::loadView('pdf.view', $data);
        
        // Download file PDF
        return $pdf->download('nama-file.pdf');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DashboardUser $dashboardUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DashboardUser $dashboardUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DashboardUser $dashboardUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DashboardUser $dashboardUser)
    {
        //
    }
}
