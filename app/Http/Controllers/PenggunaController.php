<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function kerangka_user()
    {
        return view('pengguna.daftarbarang', [
            'penggunaproduk' => Barang::limit(2)->latest()->get(),
            'semuaproduk' => Barang::all(),
        ]);
    }
}
