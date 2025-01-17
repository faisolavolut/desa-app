<?php

namespace App\Http\Controllers;

use App\Models\UmkmProduct;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public function show($id)
    {
        // Ambil data produk berdasarkan ID
        $product = UmkmProduct::with(['catalogs', 'documentations', 'news'])->findOrFail($id);

        // Kirim data ke view
        return view('umkm.detail', compact('product'));
    }
}
