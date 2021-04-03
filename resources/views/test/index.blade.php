<<<<<<< HEAD
@extends('user.template')
@section('JudulHalaman', 'Toko Mas Woko')
@section('breadcome', 'Data Barang')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="dashtwo-order-list shadow-reset">
                    <div class="row">
                        <div class="container">
                            <h1>Data Barang</h1>
                            @if (session('hasil'))

                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>{{ session('hasil') }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <a class="btn btn-primary" href="{{ route('barang.create') }}" role="button">Tambah Barang</a>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Nama Barang</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Diskon</th>
                                        <th scope="col">Jumlah Stok</th>
                                        <th scope="col">Kadaluarsa</th>
                                        <th scope="col">Supplier</th>
                                        <th scope="col">Edit</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>

                                            <td>{{ $item->nama_barang }}</td>
                                            <td>{{ $item->harga }}</td>
                                            <td>{{ $item->diskon }}</td>
                                            <td>{{ $item->jumlah_stok }}</td>
                                            <td>{{ $item->kadaluarsa }}</td>
                                            <td>{{ $item->id_supplier }}</td>
                                            <td>
                                                <a class="btn btn-outline-dark"
                                                    href="{{ route('barang.edit', $item->id) }}" role="button">Edit</a>


                                                <form action="{{ route('barang.destroy', $item) }}" method="post"
                                                    class="d-inline-block" style="margin: 0.4em 0;">
                                                    @csrf
                                                    @method("delete")
                                                    <button type="submit" class="btn btn-bordered btn-danger "
                                                        onclick="return confirm('apakah anda yakin menghapus barang {{ $item->nama_barang }}?');"><i
                                                            class="fa fa-check mr-1"></i>Hapus</button>
                                                </form>
                                            </td>

                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
=======
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
    <a class="btn btn-primary" href="{{route("barang.create")}}" role="button">Tambah Barang</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Harga</th>
            <th scope="col">Diskon</th>
            <th scope="col">Jumlah Stok</th>
            <th scope="col">Kadaluarsa</th>
            <th scope="col">Supplier</th>
            <th scope="col">Edit</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>

                <td>{{$item->nama_barang}}</td>
                <td>{{$item->harga}}</td>
                <td>{{$item->diskon}}</td>
                <td>{{$item->jumlah_stok}}</td>
                <td>{{$item->kadaluarsa}}</td>
                <td>{{$item->supplier->nama_supplier}}</td>
                <td>
    <a class="btn btn-outline-dark" href="{{route("barang.edit", $item->id)}}" role="button">Edit</a>


    <form action="{{ route("barang.destroy", $item ) }}" method="post"
                                        class="d-inline-block" style="margin: 0.4em 0;">
                                        @csrf
                                        @method("delete")
                                        <button type="submit" class="btn btn-bordered btn-danger "
                                            onclick="return confirm('apakah anda yakin menghapus barang {{ $item->nama_barang }}?');"><i
                                                class="fa fa-check mr-1"></i>Hapus</button>
                                    </form>
                  </td>

              </tr>
        @endforeach

        </tbody>
      </table>

</div>
>>>>>>> f2ecd457945c8fef9e80895b62fb364b412e7b2b
@endsection
