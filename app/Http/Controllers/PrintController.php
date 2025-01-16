<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use PDF;

class PrintController extends Controller
{
    public function print(Request $request){
        $transaction = Transaction::where('id', $request->id)->with('ticket')->first();

        if(empty($transaction)){
            return;
        }

        $pdf = PDF::loadView('cetak.pdf', ['transaction' => $transaction]);

        $pdf->output();
        $dom_pdf = $pdf->getDomPDF();
        $canvas = $dom_pdf->get_canvas();
        return $pdf->stream($transaction->external_id,'-.pdf');
    }
}
