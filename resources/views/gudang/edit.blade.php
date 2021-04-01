

@extends('test.layout-test')


@section('JudulHalaman', "Halaman Tambah Barang")

@section('IsiHalaman')
<div class="container">
    <h1>Tambah Barang</h1>
    <form method="POST" action="{{route('gudang.update', $gudang)}}">
        @csrf
        @method("patch")
        {{-- protected $fillable = ['id_barang',  'id_barang',  'jumlah_barang', 'jumlah_harga', 'lunas','id_penjualan']; --}}

        <div class="mb-3">
          <label for="id_barang" class="form-label">Id Pembeli</label>
          <input value="{{$gudang->id_barang}}" type="text" class="form-control" id="id_barang" aria-describedby="id_barang" name="id_barang">
        </div>
        <div class="mb-3">
          <label for="jumlah_barang" class="form-label">Barang</label>
          <input value="{{$gudang->jumlah_barang}}" type="text" class="form-control" id="jumlah_barang" aria-describedby="jumlah_barang" name="jumlah_barang">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection
