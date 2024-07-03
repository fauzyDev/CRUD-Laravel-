@extends('master.kerangka')
<title>Toko Online | profil</title>
@section('container')
    <div class="text-center">
        <img src="../gambar/profil.jpg" alt="" class="rounded-circle img-thumbnail shadow"
            style="width: 180px; height: 180px;" />
        <h2 class="mt-2 fw-bold">Halif Fauzy</h2>
        <form action="/logout" method="POST">
            @csrf
            <button class="btn btn-danger font-bold mt-4 rounded" type="submit">Logout</button>
        </form>
    </div>
@endsection
