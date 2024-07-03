<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoribarang;
Use App\Models\Barang;
use App\Models\Gambarbarang;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('produk', [
            'produk' => Barang::all(),
            'title' => 'Produk'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addproduk', [
            'dataproduk' => Categoribarang::all(),
            'title' => 'Produk'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_products' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'stok' => 'required',
            'category_id' => 'required'
        ]);

        Barang::create($data);
        return redirect('/produk')->with('informasi','Data produk berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('detail',[
            'detailproduk' => Barang::where('id', $id)->first(),
           // 'produk' => Categoribarang::all(),
           'datagambar' => Gambarbarang::where('product_id', $id)->get(),
            'title' => 'produk'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('editproduk', [
            'editproduk' => Barang::where('id', $id)->first(),
            'dataproduk' => Categoribarang::all(),
            'title' => 'Produk'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $isidata = [
            'nama_products' => $request->nama_products,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'stok' => $request->stok,
            'category_id' => $request->category_id
        ];
        Barang::where('id', $id)->update($isidata);
        return redirect('/produk')->with('informasi','Data produk berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Barang::where('id', $id)->delete();
        return redirect('/produk')->with('informasi','Data berhasil dihapus!');
    }
}
