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
                            <h1>Edit Data Supplier</h1>
                            <form method="POST" action="{{ route('supplier.update', $supplier) }}">
                                @csrf
                                @method("patch")
                                {{-- protected $fillable = ['id_pembeli',  'id_penjualan', 'no_hp']; --}}

                                <div class="mb-3">
                                    <label for="nama_supplier" class="form-label">nama_supplier</label>
                                    <input value="{{ $supplier->nama_supplier }}" type="text" class="form-control"
                                        id="nama_supplier" aria-describedby="nama_supplier" name="nama_supplier">
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">alamat</label>
                                    <input value="{{ $supplier->alamat }}" type="text" class="form-control" id="alamat"
                                        aria-describedby="alamat" name="alamat">
                                </div>
                                <div class="mb-3">
                                    <label for="no_hp" class="form-label">no_hp</label>
                                    <input value="{{ $supplier->no_hp }}" type="text" class="form-control" id="no_hp"
                                        aria-describedby="no_hp" name="no_hp">
                                </div>
                                <div class="mb-3">
                                    <label for="catatan" class="form-label">catatan</label>
                                    <input value="{{ $supplier->catatan }}" type="text" class="form-control" id="catatan"
                                        aria-describedby="catatan" name="catatan">
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
