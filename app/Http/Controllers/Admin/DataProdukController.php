<?php

namespace App\Http\Controllers\Admin;

use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::paginate(10);
        return view('admin/dataproduk', compact('produk'));
    }
}
