@extends('user.template')
@section('JudulHalaman', 'Toko Mas Woko')
@section('breadcome', 'Data Supplier')

@section('content')
    <div class="data-table-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sparkline13-list shadow-reset">
                        <div class="sparkline13-hd">
                            @if (session('hasil'))
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>{{ session('hasil') }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <div class="main-sparkline13-hd">
                                <h1>Data Supplier</h1>
                                <hr>
                                <a class="btn btn-primary" href="{{ route('barang.create') }}" role="button">
                                    Tambah Barang
                                </a>
                                <div class="sparkline13-outline-icon">
                                    <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <div id="toolbar">
                                    <select class="form-control">
                                        <option value="">Export Basic</option>
                                        <option value="all">Export All</option>
                                        <option value="selected">Export Selected</option>
                                    </select>
                                </div>
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
                                                        href="{{ route('barang.edit', $item->id) }}"
                                                        role="button">Edit</a>


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
    </div>
@endsection
