@extends('test.layout-test')


@section('JudulHalaman', 'Halaman Tambah Barang')

@section('IsiHalaman')
    <div class="container">
        <h1>Tambah Barang</h1>
        <form method="POST" action="{{ route('detail-penjualan.store') }}">
            @csrf
            <div class="mb-3">
                <label for="id_pembeli" class="form-label">Nama Pembeli</label>
                <input type="text" class="form-control" id="id_pembeli" aria-describedby="id_pembeli" name="id_pembeli">
            </div>
            <div class="mb-3">
                <label for="id_barang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="id_barang" aria-describedby="id_barang" name="id_barang">
            </div>
            <div class="mb-3">
                <label for="jumlah_barang" class="form-label">Jumlah Barang</label>
                <input type="text" class="form-control" id="jumlah_barang" aria-describedby="jumlah_barang"
                    name="jumlah_barang">
            </div>
            <div class="mb-3">
                <label for="jumlah_harga" class="form-label">Jumlah Harga</label>
                <input type="text" class="form-control" id="jumlah_harga" aria-describedby="jumlah_harga"
                    name="jumlah_harga">
            </div>
            <div class="mb-3">
                <label for="lunas" class="form-label">Lunas</label>
                <input type="text" class="form-control" id="lunas" aria-describedby="lunas" name="lunas">
            </div>
            <div class="mb-3">
                <label for="id_penjualan" class="form-label">Id Penjualan</label>
                <input type="text" class="form-control" id="id_penjualan" aria-describedby="id_penjualan"
                    name="id_penjualan">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
