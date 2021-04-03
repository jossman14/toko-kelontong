@extends('user.template')
@section('JudulHalaman', 'Toko Mas Woko')
@section('breadcome', 'Data Supplier')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="dashtwo-order-list shadow-reset">
                    <div class="row">
                        <div class="container">
                            <h1>Data Supplier</h1>
                            @if (session('hasil'))

                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>{{ session('hasil') }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <a class="btn btn-primary" href="{{ route('supplier.create') }}" role="button">Tambah
                                Barang</a>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Nama Supplier</th>
                                        <th scope="col">alamat</th>
                                        <th scope="col">no_hp</th>
                                        <th scope="col">catatan</th>

                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>

                                            <td>{{ $item->nama_supplier }}</td>
                                            <td>{{ $item->alamat }}</td>
                                            <td>{{ $item->no_hp }}</td>
                                            <td>{{ $item->catatan }}</td>


                                            <td>
                                                <a class="btn btn-outline-dark"
                                                    href="{{ route('supplier.edit', $item->id) }}" role="button">Edit</a>


                                                <form action="{{ route('supplier.destroy', $item) }}" method="post"
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
@endsection
