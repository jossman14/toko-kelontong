@extends('test.layout-test')


@section('JudulHalaman', "Halaman Awal")

@section('IsiHalaman')
<div class="container">
    <h1>Halaman index</h1>
    @if (session('hasil'))

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{ session('hasil') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
@endif
    <a class="btn btn-primary" href="{{route("detail-penjualan.create")}}" role="button">Tambah Barang</a>
    <table class="table">
        <thead>
          <tr>

            <th scope="col">No.</th>
            <th scope="col">id_pembeli</th>
            <th scope="col">id_barang</th>
            <th scope="col">jumlah_barang</th>
            <th scope="col">jumlah_harga</th>
            <th scope="col">lunas</th>
            <th scope="col">id_penjualan</th>
            <th scope="col">Edit</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>

                <td>{{$item->pembeli->nama}}</td>
                <td>{{$item->barang->nama_barang}}</td>
                <td>{{$item->jumlah_barang}}</td>
                <td>{{$item->jumlah_harga}}</td>
                <td>{{$item->lunas}}</td>
                <td>{{$item->penjualan->id_pembeli}}</td>
                <td>
    <a class="btn btn-outline-dark" href="{{route("detail-penjualan.edit", $item->id)}}" role="button">Edit</a>


    <form action="{{ route("detail-penjualan.destroy", $item ) }}" method="post"
                                        class="d-inline-block" style="margin: 0.4em 0;">
                                        @csrf
                                        @method("delete")
                                        <button type="submit" class="btn btn-bordered btn-danger "
                                            onclick="return confirm('apakah anda yakin menghapus barang {{ $item->id_pembeli }}?');"><i
                                                class="fa fa-check mr-1"></i>Hapus</button>
                                    </form>
                  </td>

              </tr>
        @endforeach

        </tbody>
      </table>

</div>
@endsection
