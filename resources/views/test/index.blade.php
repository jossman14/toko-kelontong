@extends('user.template')
@section('JudulHalaman', 'Toko Mas Woko')
@section('breadcome', 'Data Barang')

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
                                <h1>Data Barang</h1>
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
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true"
                                    data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true"
                                    data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                    data-cookie-id-table="saveId" data-show-export="true" data-toolbar="#toolbar">
                                    <thead>
                                        <tr>
                                            <th data-field="state" data-checkbox="true"></th>
                                            <th data-field="id">No.</th>
                                            <th data-field="name">Nama Barang</th>
                                            <th data-field="harga">Harga</th>
                                            <th data-field="diskon">Diskon</th>
                                            <th data-field="stok">Jumlah Stok</th>
                                            <th data-field="kadaluarsa">Kadaluarsa</th>
                                            <th data-field="supplier">Supplier</th>
                                            <th data-field="action">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td></td>
                                                <td scope="row">{{ $loop->iteration }}</td>
                                                <td>{{ $item->nama_barang }}</td>
                                                <td>{{ $item->harga }}</td>
                                                <td>{{ $item->diskon }}</td>
                                                <td>{{ $item->jumlah_stok }}</td>
                                                <td>{{ $item->kadaluarsa }}</td>
                                                <td>{{ $item->id_supplier }}</td>
                                                <td class="button-style-three">
                                                    <div class="button-ap-list responsive-btn">
                                                        <div class="btn-group btn-custom-groups">


                                                            <a href="{{ route('barang.edit', $item->id) }}"
                                                                class="btn btn-primary" role="button"><i class="fa fa-edit "
                                                                    style="color: white"></i></a>

                                                            <form action="{{ route('barang.destroy', $item) }}"
                                                                method="post" class="d-inline-block"
                                                                style="margin: 0.4em 0;">
                                                                @csrf
                                                                @method("delete")
                                                                <button type="submit" class="btn btn-primary"
                                                                    onclick="return confirm('apakah anda yakin menghapus barang {{ $item->nama_barang }}?');"><a
                                                                        href="{{ route('barang.edit', $item->id) }}"
                                                                        role="button"></a>
                                                                    <i class="fa fa-trash"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
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
