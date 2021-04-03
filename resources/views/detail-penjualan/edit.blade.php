@extends('test.layout-test')


@section('JudulHalaman', "Halaman Tambah Barang")

@section('IsiHalaman')
<div class="container">
    <h1>Tambah Barang</h1>
    <form method="POST" action="{{route('detail-penjualan.update', $detail_penjualan)}}">
        @csrf
        @method("patch")
        protected $fillable = ['id_pembeli',  'id_barang',  'jumlah_barang', 'jumlah_harga', 'lunas','id_penjualan'];

        <div class="mb-3">
          <label for="id_pembeli" class="form-label">id_pembeli</label>
          <input value="{{$detail_penjualan->id_pembeli}}" type="text" class="form-control" id="id_pembeli" aria-describedby="id_pembeli" name="id_pembeli">
        </div>
        <div class="mb-3">
          <label for="harga" class="form-label">Harga</label>
          <input value="{{$detail_penjualan->harga}}" type="text" class="form-control" id="harga" aria-describedby="harga" name="harga">
        </div>
        <div class="mb-3">
          <label for="diskon" class="form-label">Diskon</label>
          <input value="{{$detail_penjualan->diskon}}" type="text" class="form-control" id="diskon" aria-describedby="diskon" name="diskon">
        </div>
        <div class="mb-3">
          <label for="jumlah_stok" class="form-label">Jumlah Stok</label>
          <input value="{{$detail_penjualan->jumlah_stok}}" type="text" class="form-control" id="jumlah_stok" aria-describedby="jumlah_stok" name="jumlah_stok">
        </div>
        <div class="mb-3">
          <label for="kadaluarsa" class="form-label">Kadaluarsa</label>
          <input value="{{$detail_penjualan->kadaluarsa}}" type="text" class="form-control" id="kadaluarsa" aria-describedby="kadaluarsa" name="kadaluarsa">
        </div>
        <div class="mb-3">
          <label for="id_supplier" class="form-label">Supplier</label>
          <input value="{{$detail_penjualan->id_supplier}}" type="text" class="form-control" id="id_supplier" aria-describedby="id_supplier" name="id_supplier">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection
