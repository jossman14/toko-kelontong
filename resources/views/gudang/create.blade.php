@extends('test.layout-test')


@section('JudulHalaman', 'Halaman Tambah Barang')

@section('IsiHalaman')
    <div class="container">
        <h1>Tambah Barang</h1>
        <form method="POST" action="{{ route('gudang.store') }}">
            @csrf


            {{-- <div class="mb-3">
                <label for="id_barang" class="form-label">Id Barang</label>
                <input type="text" class="form-control" id="id_barang" aria-describedby="id_barang" name="id_barang">
            </div> --}}


            <select class="form-select my-4" id="id_barang" aria-describedby="id_barang" name="id_barang">
                <option selected>Pilih Barang</option>
                @foreach ($barang as $item)
                <option value="{{$item->id}}">{{$item->nama_barang}}</option>
                @endforeach

              </select>
            <div class="mb-3">
                <label for="jumlah_barang" class="form-label">Jumlah Stok</label>
                <input type="text" class="form-control" id="jumlah_barang" aria-describedby="jumlah_barang" name="jumlah_barang">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
