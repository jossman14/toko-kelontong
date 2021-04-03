

@extends('test.layout-test')


@section('JudulHalaman', "Halaman Tambah Barang")

@section('IsiHalaman')
<div class="container">
    <h1>Tambah Barang</h1>
    <form method="POST" action="{{route('hutang.update', $hutang)}}">
        @csrf
        @method("patch")

        {{-- <div class="mb-3">
          <label for="id_pembeli" class="form-label">Id Pembeli</label>
          <input value="{{$hutang->id_pembeli}}" type="text" class="form-control" id="id_pembeli" aria-describedby="id_pembeli" name="id_pembeli">
        </div>
        <div class="mb-3">
          <label for="id_penjualan" class="form-label">id penjualan</label>
          <input value="{{$hutang->id_penjualan}}" type="text" class="form-control" id="id_penjualan" aria-describedby="id_penjualan" name="id_penjualan">
        </div> --}}

        <select class="form-select my-4" id="id_pembeli" aria-describedby="id_pembeli" name="id_pembeli">
            <option selected>Pilih Pembeli</option>
            @foreach ($pembeli as $item)
            <option value="{{$item->id}}">{{$item->nama}}</option>
            @endforeach

          </select>

        {{-- <div class="mb-3">
            <label for="id_penjualan" class="form-label">id penjualan</label>
            <input type="text" class="form-control" id="id_penjualan" aria-describedby="id_penjualan" name="id_penjualan">
        </div> --}}

        <select class="form-select my-4" id="id_penjualan" aria-describedby="id_penjualan" name="id_penjualan">
            <option selected>Pilih Penjualan</option>
            @foreach ($penjualan as $item)
            <option value="{{$item->id}}">{{$item->id_pembeli}}</option>
            @endforeach
        </select>

        <div class="mb-3">
          <label for="jumlah_kurang" class="form-label">jumlah kurang</label>
          <input value="{{$hutang->jumlah_kurang}}" type="text" class="form-control" id="jumlah_kurang" aria-describedby="jumlah_kurang" name="jumlah_kurang">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection
