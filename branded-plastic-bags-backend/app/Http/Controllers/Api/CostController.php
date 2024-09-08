<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Bag;
use Illuminate\Http\Request;

class CostController extends Controller
{
    /**
     * Calculate the cost based on the given parameters.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function calculate(Request $request)
    {
        $validatedData = $request->validate([
            'bag_id' => 'required|exists:bags,id',
            'quantity' => 'required|numeric|min:1',
        ]);

        $bag = Bag::findOrFail($validatedData['bag_id']);

        $pricePerUnit = $bag->price_per_unit;
        $taxRate = 0.10; // 10% tax

        $subTotal = $validatedData['quantity'] * $pricePerUnit;
        $taxAmount = $subTotal * $taxRate;
        $total = $subTotal + $taxAmount;

        return response()->json([
            'subTotal' => $subTotal,
            'taxAmount' => $taxAmount,
            'total' => $total,
        ], 200);
    }
}