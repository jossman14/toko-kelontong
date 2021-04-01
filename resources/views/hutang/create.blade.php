@extends('test.layout-test')


@section('JudulHalaman', 'Halaman Tambah Barang')

@section('IsiHalaman')
    <div class="container">
        <h1>Tambah Barang</h1>
        <form method="POST" action="{{ route('hutang.store') }}">
            @csrf


            <div class="mb-3">
                <label for="id_pembeli" class="form-label">Id pembeli</label>
                <input type="text" class="form-control" id="id_pembeli" aria-describedby="id_pembeli" name="id_pembeli">
            </div>
            <div class="mb-3">
                <label for="id_penjualan" class="form-label">id penjualan</label>
                <input type="text" class="form-control" id="id_penjualan" aria-describedby="id_penjualan" name="id_penjualan">
            </div>
            <div class="mb-3">
                <label for="jumlah_kurang" class="form-label">jumlhah kurang</label>
                <input type="text" class="form-control" id="jumlah_kurang" aria-describedby="jumlah_kurang" name="jumlah_kurang">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
