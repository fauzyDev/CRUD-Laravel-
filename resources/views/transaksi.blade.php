@extends('master.kerangka')
<title>Toko Online | transaksi</title>
@section('container')
    <h3 class="h3">Transaksi</h3>
    <table class="table table-responsiv table-bordered">
        <tr class="table-primary">
            <th class="text-center">No</th>
            <th class="text-center">Tanggal transaksi</th>
            <th class="text-center">Nama</th>
            <th class="text-center">No Telpon</th>
            <th class="text-center">Kurir</th>
            <th class="text-center">Total</th>
            <th class="text-center">Status</th>
            <th class="text-center">Aksi</th>
        <tr>
            @foreach ($transaksi as $transaksinya)
        <tr>
            <td>{{ $transaksinya->id }}</td>
            <td>{{ $transaksinya->created_at }}</td>
            <td>{{ $transaksinya->name }}</td>
            <td>{{ $transaksinya->phone }}</td>
            <td>{{ $transaksinya->kurir }}</td>
            <td>{{ $transaksinya->total_price }}</td>
            <td>{{ $transaksinya->status }}</td>
            <td class="text-center">
                <button class="btn btn-danger btn-sm">Delete</button>
                <a href="#" class="btn btn-primary" role="button">detail</a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
