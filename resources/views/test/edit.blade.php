<<<<<<< HEAD
@extends('user.template')
@section('JudulHalaman', 'Toko Mas Woko')
@section('breadcome', 'Edit Data Barang')
=======
@extends('test.layout-test')

>>>>>>> f2ecd457945c8fef9e80895b62fb364b412e7b2b

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="dashtwo-order-list shadow-reset">
                    <div class="row">
                        <div class="container">
                            <h1>Edit Data Barang</h1>
                            <form method="POST" action="{{ route('barang.update', $barang) }}">
                                @csrf
                                @method("patch")

                                <div class="mb-3">
                                    <label for="nama_barang" class="form-label">Nama Barang</label>
                                    <input value="{{ $barang->nama_barang }}" type="text" class="form-control"
                                        id="nama_barang" aria-describedby="nama_barang" name="nama_barang">
                                </div>
                                <div class="mb-3">
                                    <label for="harga" class="form-label">Harga</label>
                                    <input value="{{ $barang->harga }}" type="text" class="form-control" id="harga"
                                        aria-describedby="harga" name="harga">
                                </div>
                                <div class="mb-3">
                                    <label for="diskon" class="form-label">Diskon</label>
                                    <input value="{{ $barang->diskon }}" type="text" class="form-control" id="diskon"
                                        aria-describedby="diskon" name="diskon">
                                </div>
                                <div class="mb-3">
                                    <label for="jumlah_stok" class="form-label">Jumlah Stok</label>
                                    <input value="{{ $barang->jumlah_stok }}" type="text" class="form-control"
                                        id="jumlah_stok" aria-describedby="jumlah_stok" name="jumlah_stok">
                                </div>
                                <div class="mb-3">
                                    <label for="kadaluarsa" class="form-label">Kadaluarsa</label>
                                    <input value="{{ $barang->kadaluarsa }}" type="text" class="form-control"
                                        id="kadaluarsa" aria-describedby="kadaluarsa" name="kadaluarsa">
                                </div>
                                <div class="mb-3">
                                    <label for="id_supplier" class="form-label">Supplier</label>
                                    <input value="{{ $barang->id_supplier }}" type="text" class="form-control"
                                        id="id_supplier" aria-describedby="id_supplier" name="id_supplier">
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
