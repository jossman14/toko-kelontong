<?php

namespace App\Http\Controllers;

use App\barang;
use App\supplier;
use Illuminate\Http\Request;

class BarangController extends Controller
{

    public function __construct()
    {
        $this->BarangModel = new barang();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = barang::with("supplier")->get();



        return view('test.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //mengarah ke halaman tambah barang
        $supplier = supplier::all();
        return view('test.create', compact('supplier'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        barang::create($request->all());


        return redirect("/barang")->with("hasil", "Data Barang Berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(barang $barang)
    {
        return view("test.edit", compact("barang"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, barang $barang)
    {

        barang::where("id", $barang->id)
            ->update([
                "nama_barang" => $request->nama_barang ? $request->nama_barang : $barang->nama_barang,
                "harga" => $request->harga ? $request->harga : $barang->harga,
                "diskon" => $request->diskon ? $request->diskon : $barang->diskon,
                "jumlah_stok" => $request->jumlah_stok ? $request->jumlah_stok : $barang->jumlah_stok,
                "kadaluarsa" => $request->kadaluarsa ? $request->kadaluarsa : $barang->kadaluarsa,
                "id_supplier" => $request->id_supplier ? $request->id_supplier : $barang->id_supplier,
            ]);

        return redirect("/barang")->with("hasil", "selamat data barang anda berhasil diedit!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(barang $barang)
    {
        // dd($barang);
        barang::destroy($barang->id);
        // $data = $this->BarangModel->HapusDataBarang($barang->id);
        return redirect("/barang")->with("hasil", "selamat data anda berhasil dihapus!");
    }
}
