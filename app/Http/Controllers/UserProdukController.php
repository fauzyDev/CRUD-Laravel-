<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use App\Models\Gambarbarang;
use Illuminate\Http\Request;

class UserProdukController extends Controller
{
    public function Detail($id)
    {
        return view('detprodukpengguna', [
        'images' => Gambarbarang::with('galeri')->where('product_id', $id)->get(),
        'product' => Barang::where('id', $id)->first(),
        'products'  => Barang::all()
        ]);
    }
}
