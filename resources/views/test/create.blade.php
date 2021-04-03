<<<<<<< HEAD
@extends('user.template')
@section('JudulHalaman', 'Toko Mas Woko')
@section('breadcome', 'Data Barang')
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
                            <h1>Tambah Barang</h1>
                            <form method="POST" action="{{ route('barang.store') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="nama_barang" class="form-label">Nama Barang</label>
                                    <input type="text" class="form-control" id="nama_barang" aria-describedby="nama_barang"
                                        name="nama_barang">
                                </div>
                                <div class="mb-3">
                                    <label for="harga" class="form-label">Harga</label>
                                    <input type="text" class="form-control" id="harga" aria-describedby="harga"
                                        name="harga">
                                </div>
                                <div class="mb-3">
                                    <label for="diskon" class="form-label">Diskon</label>
                                    <input type="text" class="form-control" id="diskon" aria-describedby="diskon"
                                        name="diskon">
                                </div>
                                <div class="mb-3">
                                    <label for="jumlah_stok" class="form-label">Jumlah Stok</label>
                                    <input type="text" class="form-control" id="jumlah_stok" aria-describedby="jumlah_stok"
                                        name="jumlah_stok">
                                </div>
                                <div class="mb-3">
                                    <label for="kadaluarsa" class="form-label">Kadaluarsa</label>
                                    <input type="text" class="form-control" id="kadaluarsa" aria-describedby="kadaluarsa"
                                        name="kadaluarsa">
                                </div>
                                <div class="mb-3">
                                    <label for="id_supplier" class="form-label">Supplier</label>
                                    <input type="text" class="form-control" id="id_supplier" aria-describedby="id_supplier"
                                        name="id_supplier">
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<<<<<<< HEAD
    </div>
=======
        <div class="mb-3">
          <label for="jumlah_stok" class="form-label">Jumlah Stok</label>
          <input type="text" class="form-control" id="jumlah_stok" aria-describedby="jumlah_stok" name="jumlah_stok">
        </div>
        <div class="mb-3">
          <label for="kadaluarsa" class="form-label">Kadaluarsa</label>
          <input type="text" class="form-control" id="kadaluarsa" aria-describedby="kadaluarsa" name="kadaluarsa">
        </div>
        {{-- <div class="mb-3">
          <label for="id_supplier" class="form-label">Supplier</label>
          <input type="text" class="form-control" id="id_supplier" aria-describedby="id_supplier" name="id_supplier">
        </div> --}}

        <select class="form-select" id="kadaluarsa" aria-describedby="kadaluarsa" name="kadaluarsa">
            <option selected>Pilih Supplier</option>
            @foreach ($supplier as $item)
            <option value="{{$item->id}}">{{$item->nama_supplier}}</option>
            @endforeach

          </select>

        <button type="submit" class="mt-5 btn btn-primary">Submit</button>
      </form>
</div>
>>>>>>> f2ecd457945c8fef9e80895b62fb364b412e7b2b
@endsection
