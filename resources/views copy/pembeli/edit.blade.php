

@extends('test.layout-test')


@section('JudulHalaman', "Halaman Tambah Barang")

@section('IsiHalaman')
<div class="container">
    <h1>Tambah Barang</h1>
    <form method="POST" action="{{route('pembeli.update', $pembeli)}}">
        @csrf
        @method("patch")
        protected $fillable = ['nama',  'alamat', 'no_hp'];

        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input value="{{$pembeli->nama}}" type="text" class="form-control" id="nama" aria-describedby="nama" name="nama">
        </div>
        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat</label>
          <input value="{{$pembeli->alamat}}" type="text" class="form-control" id="alamat" aria-describedby="alamat" name="alamat">
        </div>
        <div class="mb-3">
          <label for="no_hp" class="form-label">No. HP</label>
          <input value="{{$pembeli->no_hp}}" type="text" class="form-control" id="no_hp" aria-describedby="no_hp" name="no_hp">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection
