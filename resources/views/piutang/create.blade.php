@extends('test.layout-test')


@section('JudulHalaman', 'Halaman Tambah Barang')

@section('IsiHalaman')
    <div class="container">
        <h1>Tambah Barang</h1>
        <form method="POST" action="{{ route('piutang.store') }}">
            @csrf
            <div class="mb-3">
                <label for="id_pembeli" class="form-label">ID Pembeli</label>
                <input type="text" class="form-control" id="id_pembeli" aria-describedby="id_pembeli" name="id_pembeli">
            </div>
            <div class="mb-3">
                <label for="id_penjualan" class="form-label">id_penjualan</label>
                <input type="text" class="form-control" id="id_penjualan" aria-describedby="id_penjualan" name="id_penjualan">
            </div>
            <div class="mb-3">
                <label for="jumlah_bayar" class="form-label">jumlah_bayar</label>
                <input type="text" class="form-control" id="jumlah_bayar" aria-describedby="jumlah_bayar" name="jumlah_bayar">
            </div>



            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
