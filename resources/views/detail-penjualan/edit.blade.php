@extends('test.layout-test')


@section('JudulHalaman', "Halaman Tambah Barang")

@section('IsiHalaman')
<div class="container">
    <h1>Tambah Barang</h1>
    <form method="POST" action="{{route('gudang.update', $detail_penjualan)}}">
        @csrf
        @method("patch")
        {{-- protected $fillable = ['id_pembeli',  'id_barang',  'jumlah_barang', 'jumlah_harga', 'lunas','id_penjualan']; --}}

        <div class="mb-3">
          <label for="id_pembeli" class="form-label">Id Pembeli</label>
          <input value="{{$detail_penjualan->id_pembeli}}" type="text" class="form-control" id="id_pembeli" aria-describedby="id_pembeli" name="id_pembeli">
        </div>
        <div class="mb-3">
          <label for="id_barang" class="form-label">Barang</label>
          <input value="{{$detail_penjualan->id_barang}}" type="text" class="form-control" id="id_barang" aria-describedby="id_barang" name="id_barang">
        </div>
        <div class="mb-3">
          <label for="jumlah_barang" class="form-label">Jumlah Barang</label>
          <input value="{{$detail_penjualan->jumlah_barang}}" type="text" class="form-control" id="jumlah_barang" aria-describedby="jumlah_barang" name="jumlah_barang">
        </div>
        <div class="mb-3">
          <label for="jumlah_harga" class="form-label">Jumlah Harga</label>
          <input value="{{$detail_penjualan->jumlah_harga}}" type="text" class="form-control" id="jumlah_harga" aria-describedby="jumlah_harga" name="jumlah_harga">
        </div>
        <div class="mb-3">
          <label for="lunas" class="form-label">Lunas</label>
          <input value="{{$detail_penjualan->lunas}}" type="text" class="form-control" id="lunas" aria-describedby="lunas" name="lunas">
        </div>
        <div class="mb-3">
          <label for="id_penjualan" class="form-label">Penjualan</label>
          <input value="{{$detail_penjualan->id_penjualan}}" type="text" class="form-control" id="id_penjualan" aria-describedby="id_penjualan" name="id_penjualan">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection
