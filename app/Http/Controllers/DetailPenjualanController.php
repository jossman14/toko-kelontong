<?php

namespace App\Http\Controllers;

use App\barang;
use App\detail_penjualan;
use App\hutang;
use Illuminate\Http\Request;

class DetailPenjualanController extends Controller
{

    public function __construct()
    {
        $this->detail_penjualanModel = new detail_penjualan();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = detail_penjualan::all();


        return view('detail-penjualan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //mengarah ke halaman tambah detail_penjualan
        return view('detail-penjualan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        detail_penjualan::create($request->all());


        return redirect("/detail_penjualan")->with("hasil", "Data detail_penjualan Berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\detail_penjualan  $detail_penjualan
     * @return \Illuminate\Http\Response
     */
    public function show(detail_penjualan $detail_penjualan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\detail_penjualan  $detail_penjualan
     * @return \Illuminate\Http\Response
     */
    public function edit(detail_penjualan $detail_penjualan)
    {
        return view("detail-penjualan.edit", compact("detail_penjualan"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\detail_penjualan  $detail_penjualan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, detail_penjualan $detail_penjualan)
    {

        detail_penjualan::where("id", $detail_penjualan->id)
            ->update([
                "id_pembeli" => $request->id_pembeli ? $request->id_pembeli : $detail_penjualan->id_pembeli,
                "id_barang" => $request->id_barang ? $request->id_barang : $detail_penjualan->id_barang,
                "jumlah_barang" => $request->jumlah_barang ? $request->jumlah_barang : $detail_penjualan->jumlah_barang,
                "jumlah_id_barang" => $request->jumlah_id_barang ? $request->jumlah_id_barang : $detail_penjualan->jumlah_id_barang,
                "lunas" => $request->lunas ? $request->lunas : $detail_penjualan->lunas,
                "id_penjualan" => $request->id_penjualan ? $request->id_penjualan : $detail_penjualan->id_penjualan,
            ]);

        return redirect("/detail_penjualan")->with("hasil", "selamat data detail_penjualan anda berhasil diedit!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\detail_penjualan  $detail_penjualan
     * @return \Illuminate\Http\Response
     */
    public function destroy(detail_penjualan $detail_penjualan)
    {
        // dd($detail_penjualan);
        detail_penjualan::destroy($detail_penjualan->id);
        // $data = $this->detail_penjualanModel->HapusDatadetail_penjualan($detail_penjualan->id);
        return redirect("/detail_penjualan")->with("hasil", "selamat data anda berhasil dihapus!");
    }
}
