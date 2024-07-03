@extends('master.kerangka')
<title>Ubah Produk</title>
@section('container')
    <h3 class="h3"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
            class="bi bi-pencil-square" viewBox="0 0 16 16">
            <path
                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
            <path fill-rule="evenodd"
                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
        </svg> Ubah data produk</h3>
    <div class="col-md-8">
        <div class="card border-primary card">
            <div class="card-body">
                <form action="/produk/{{ $editproduk->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="from-group">
                        <h6><label for="namaproduk">Nama Produk</label></h6>
                        <input type="text" name="nama_products" placeholder="" class="form-control" autocomplete="off"
                            value="{{ $editproduk->nama_products }}">
                    </div>
                    <div class="mt-2">
                        <h6><label for="harga">Harga</label></h6>
                        <input type="text" name="harga" class="form-control" placeholder="" autocomplete="off"
                            value="{{ $editproduk->harga }}">
                    </div>
                    <div class="mt-2">
                        <h6><label for="deskripsi">Deskripsi</label></h6>
                        <input type="text" name="deskripsi" class="form-control" placeholder="" autocomplete="off"
                            value="{{ $editproduk->deskripsi }}">
                    </div>
                    <div class="mt-2">
                        <h6><label for="stok">Stok</label></h6>
                        <input type="text" name="stok" id="stok" class="form-control" placeholder=""
                            autocomplete="off" value="{{ $editproduk->stok }}">
                    </div>

                    <!-- <div class="mt-2">
                            <h6><label for="kategori">kategori</label></h6>
                            <input type="text" name="kategori" class="form-control" placeholder="" autocomplete="off">
                        </div> -->
                    <div class="mt-2">
                        <h6><label for="kategori">kategori</label></h6>
                        <select class="form-select" name="category_id" value="{{ $editproduk->category_id }}">
                            @foreach ($dataproduk as $produk)
                                <option value="{{ $produk->id }}">{{ $produk->nama_category }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mt-1">
                        <a href="/produk" class="btn btn-danger mt-3"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z" />
                                <path fill-rule="evenodd"
                                    d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                            </svg> Kembali</a>
                        <button class="btn btn-primary mt-3"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-journal-check" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                <path
                                    d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                                <path
                                    d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                            </svg> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
