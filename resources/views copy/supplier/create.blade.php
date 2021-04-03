@extends('test.layout-test')


@section('JudulHalaman', 'Halaman Tambah Barang')

@section('IsiHalaman')
    <div class="container">
        <h1>Tambah Barang</h1>
        <form method="POST" action="{{ route('supplier.store') }}">
            @csrf
            <div class="mb-3">
                <label for="nama_supplier" class="form-label">nama_supplier</label>
                <input type="text" class="form-control" id="nama_supplier" aria-describedby="nama_supplier" name="nama_supplier">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">alamat</label>
                <input type="text" class="form-control" id="alamat" aria-describedby="alamat" name="alamat">
            </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label">no_hp</label>
                <input type="text" class="form-control" id="no_hp" aria-describedby="no_hp" name="no_hp">
            </div>
            <div class="mb-3">
                <label for="catatan" class="form-label">catatan</label>
                <input type="text" class="form-control" id="catatan" aria-describedby="catatan" name="catatan">
            </div>



            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
