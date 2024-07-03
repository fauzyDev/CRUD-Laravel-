@extends('master.kerangkauser')
@section('content')
    <div class="container">

        {{-- Card Header --}}
        <div class="card card-header border-dark" style="margin-top: 100px;">
            <h3 class="h3 mt-2"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                    class="bi bi-list-ul" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                </svg> Detail Produk</h3>
        </div>
        {{-- Card Body --}}
        <div class="card border-dark">
            <div class="card-body">

                <div class="row">
                    <div class="col-md-4">
                        {{-- Detail Gambar Slide --}}
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @if ($images->count(0))
                                    <div class="carousel-item active">
                                        <img src="/img-galeri/{{ $images[0]->url }}" class="d-block w-100" alt="...">
                                    </div>
                                @endif
                                @foreach ($images->skip(1) as $item)
                                    <div class="carousel-item">
                                        <img src="/img-galeri/{{ $item->url }}" class="d-block w-100" alt="...">
                                    </div>
                                @endforeach
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-8">
                        {{-- Label Nama --}}
                        <label for="">Nama Produk:</label>
                        <h4 class="fw-bold">{{ $product->nama_products }}</h4>
                        {{-- label Kategori --}}
                        <label class="text-secondary">Kategori:</label>
                        <label class="text-secondary">{{ $product->produk_kategori->nama_category }}</label>
                        {{-- Label Harga --}}
                        <h4 class="fw-bold mt-3"><sup>Rp</sup>{{ number_format($product->harga, 0, '.', '.') }}</h4>
                        {{-- button --}}
                        <a href="/" class="btn btn-danger mt-3 rounded-pill"><svg xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-left"
                                viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z" />
                                <path fill-rule="evenodd"
                                    d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                            </svg> Kembali</a>
                        <form action="" method="POST" class="d-inline">
                            @csrf
                            <button class="btn btn-primary mt-3 rounded-pill" type="submit">Beli Sekarang</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
