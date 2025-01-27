<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class WeebHookController extends Controller
{
    public function updateStatus(Request $request)
    {
        try {
            $data = $request->all();
            $transaction = Transaction::where('external_id', $data['external_id'])->first();

            if (!$transaction) {
                return response()->json(['success' => false, 'message' => 'Transaction not found']);
            }
            
            $transaction->update([
                'status_transaction' => $data['status'],
            ]);

            return response()->json(['success' => true, 'message' => 'Status transaction updated successfully']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Failed to update status transaction']);
        }
    }
}
