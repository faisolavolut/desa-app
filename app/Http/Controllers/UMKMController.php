<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UmkmProduct;

class UMKMController extends Controller
{
    public function index()
    {
        // Ambil data dari masing-masing tabel
        $products = UmkmProduct::paginate(12);
        // Kirim data ke view
        return view('umkm.home', compact('products'));
    }
}
