<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Support;

class SupportController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:umkm_products,id',
            'quantity' => 'nullable|integer|min:1',
            'total' => 'nullable|numeric|min:0',
            'notes' => 'nullable|string|max:500',
        ]);

        Support::create([
            'user_id' => auth()->id(),
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'total' => $request->total,
            'notes' => $request->notes,
        ]);

        return response()->json(['message' => 'Support berhasil ditambahkan.']);
    }
}
