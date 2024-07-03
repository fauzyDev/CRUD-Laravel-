<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Categoribarang;

class CategoryProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kategoriproduk', [
            'kategoriproduk' => Categoribarang::all(),
            'title' => 'Kategoriproduk'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addkategori', [
            'title' => 'Kategoriproduk'
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
        $data = [
            'nama_category' => $request->namakategori
        ];

        Categoribarang::create($data);
        return redirect('kategoriproduk')->with('informasi','Data produk berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('editkategori', [
            'editkategori' => Categoribarang::where('id', $id)->first(),
            'title' => 'Kategoriproduk'
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
            'nama_category' => $request->namakategori
        ];
        Categoribarang::where('id', $id)->update($isidata);
        return redirect('/kategoriproduk')->with('informasi','Data produk berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Categoribarang::where('id', $id)->delete();
        return redirect('/kategoriproduk')->with('informasi','Data berhasil dihapus!');
    }
}
