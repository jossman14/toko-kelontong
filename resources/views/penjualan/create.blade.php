@extends('test.layout-test')


@section('JudulHalaman', 'Halaman Tambah Barang')

@section('IsiHalaman')
    <div class="container">
        <h1>Tambah Barang</h1>
        <form method="POST" action="{{ route('penjualan.store') }}">
            @csrf
            {{-- <div class="mb-3">
                <label for="id_pembeli" class="form-label">ID Pembeli</label>
                <input type="text" class="form-control" id="id_pembeli" aria-describedby="id_pembeli" name="id_pembeli">
            </div> --}}


            <select class="form-select my-4" id="id_pembeli" aria-describedby="id_pembeli" name="id_pembeli">
                <option selected>Pilih Barang</option>
                @foreach ($pembeli as $item)
                <option value="{{$item->id}}">{{$item->nama}}</option>
                @endforeach

              </select>
            <div class="mb-3">
                <label for="jumlah_total" class="form-label">jumlah_total</label>
                <input type="text" class="form-control" id="jumlah_total" aria-describedby="jumlah_total" name="jumlah_total">
            </div>



            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
