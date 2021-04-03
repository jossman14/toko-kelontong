@extends('test.layout')
@section('JudulHalaman', 'Toko Mas Woko')
@section('IsiHalaman')
    <nav>
        <div class="navbar navbar-expand-lg navbar-dark bg-info nav nav-tabs rounded-top" id="nav-tab" role="tablist">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/mw.png') }} " alt="" height="50px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                aria-controls="nav-home" aria-selected="true">
                <img src="{{ asset('images/home.png') }} " alt="" height="50px">
            </a>
            <a class="nav-item nav-link" id="nav-master-tab" data-toggle="tab" href="#nav-master" role="tab"
                aria-controls="nav-master" aria-selected="true">
                <img src="{{ asset('images/master.png') }} " alt="" height="50px">
            </a>
            <a class="nav-item nav-link" id="nav-cart-tab" data-toggle="tab" href="#nav-cart" role="tab"
                aria-controls="nav-cart" aria-selected="false">
                <img src="{{ asset('images/cart.png') }} " alt="" height="50px">
            </a>
            <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab"
                aria-controls="nav-about" aria-selected="false">
                <img src="{{ asset('images/about.png') }} " alt="" height="50px">
            </a>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <h1>HOME</h1>
        </div>
        <div class="tab-pane fade" id="nav-master" role="tabpanel" aria-labelledby="nav-master-tab">
            <h1>MASTER</h1>
        </div>
        <div class="tab-pane fade" id="nav-cart" role="tabpanel" aria-labelledby="nav-cart-tab">
            <div class="content-cart">
                <div class="row col-sm transaksi">
                    <div class="card text-white mb-3">
                        <div class="card-header bg-primary">TRANSAKSI PENJUALAN</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col data rounded-3">
                                    <table>
                                        <tr>
                                            <td>No. Nota</td>
                                            <td><input type="text" disabled></td>
                                        </tr>
                                        <tr>
                                            <td>Pelanggan</td>
                                            <td><input type="text" autofocus></td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal</td>
                                            <td><input type="text" disabled value="{{ date('d-m-Y') }} ">
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col data rounded-3">
                                    <table class="hasil-cart d-flex justify-content-center">
                                        <tr>
                                            <td>
                                                <h1>Total Bayar</h1>
                                            </td>
                                            <td>
                                                <h1>: </h1>
                                            </td>
                                            <td>
                                                <h1>Rp 67.500,-</h1>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <hr>
                            <table class="transaksi-input col-sm-12">
                                <tr class="row transaksi-input-label">
                                    <td class="col-sm">Kode Barang</td>
                                    <td class="col-sm">Nama Barang</td>
                                    <td class="col-sm">Stok</td>
                                    <td class="col-sm">Harga Satuan</td>
                                    <td class="col-sm">Jumlah Jual</td>
                                    <td class="col-sm">Harga Akhir</td>
                                </tr>
                                <tr class="row transaksi-input-form">
                                    <td class="col-sm"><input type="text" placeholder="KODE BARANG" autofocus> </td>
                                    <td class="col-sm"><input type="text" placeholder="NAMA BARANG"> </td>
                                    <td class="col-sm"><input type="text" placeholder="STOK"></td>
                                    <td class="col-sm"><input type="text" placeholder="HARGA SATUAN" autofocus> </td>
                                    <td class="col-sm"><input type="text" placeholder="JML JUAL"> </td>
                                    <td class="col-sm"><input type="text" placeholder="HARGA AKHIR"></td>
                                </tr>
                                <tr class="row float-end">
                                    <td>
                                        <a href="" class="btn btn-sm btn-info">Cari Barang</a>
                                        <a href="" class="btn btn-sm btn-success">Simpan Item</a>
                                        <a href="" class="btn btn-sm btn-warning">Batal Item</a>
                                        <a href="" class="btn btn-sm btn-danger">Hapus Semua Item</a>
                                    </td>
                                </tr>
                            </table>
                            <hr>

                            <div class="content-cart">
                                <div class="row col-sm">
                                    <div class="card text-white mb-3">
                                        <div class="card-header bg-primary">Barang Yang Dijual</div>
                                        <div class="card-body">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" style="text-align: center">KODE BARANG</th>
                                                        <th scope="col" style="text-align: center">NAMA BARANG</th>
                                                        <th scope="col" style="text-align: center">HARGA SATUAN</th>
                                                        <th scope="col" style="text-align: center">JUMLAH</th>
                                                        <th scope="col" style="text-align: center">HARGA AKHIR</th>
                                                        <th scope="col" style="text-align: center">OPSI</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td style="text-align: center">B0001</td>
                                                        <td>BERAS</td>
                                                        <td style="text-align: right">Rp 50000</td>
                                                        <td style="text-align: center">3</td>
                                                        <td style="text-align: right">Rp 150000</td>
                                                        <td style="text-align: center"><a href=""
                                                                class="btn btn-sm btn-danger">Hapus</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center">B0003</td>
                                                        <td>KECAP</td>
                                                        <td style="text-align: right">Rp 8000</td>
                                                        <td style="text-align: center">5</td>
                                                        <td style="text-align: right">Rp 40000</td>
                                                        <td style="text-align: center"><a href=""
                                                                class="btn btn-sm btn-danger">Hapus</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="content-cart">
                                <div class="row col-sm">
                                    <div class="card text-white mb-3">
                                        <div class="row">
                                            <div class="col-sm-3 data rounded-3">
                                                <table style="color: black">
                                                    <tr>
                                                        <td>Sub. Total</td>
                                                        <td><input type="text" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Diskon</td>
                                                        <td><input type="text"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Total Bayar</td>
                                                        <td><input type="text" disabled>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-sm-3 data rounded-3">
                                                <table style="color: black">
                                                    <tr>
                                                        <td>Bayar</td>
                                                        <td><input type="text"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kembalian</td>
                                                        <td><input type="text" disabled></td>
                                                    </tr>
                                                    <tr style="text-align: right">
                                                        <td>
                                                            <a href="" class="btn btn-sm btn-warning">Batal Item</a>
                                                        </td>
                                                        <td>
                                                            <a href="" class="btn btn-sm btn-success">Simpan Item</a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
        <h1>ABOUT</h1>
    </div>
    </div>
@endsection
