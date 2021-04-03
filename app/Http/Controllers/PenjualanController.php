<?php

namespace App\Http\Controllers;

use App\pembeli;
use App\penjualan;

use Illuminate\Http\Request;

class PenjualanController extends Controller
{

    public function __construct()
    {
        $this->penjualanModel = new penjualan();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = penjualan::all();
        $data = penjualan::with("pembeli")->get();



        return view('penjualan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //mengarah ke halaman tambah penjualan
        $pembeli = pembeli::all();
        return view('penjualan.create', compact('pembeli'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        penjualan::create($request->all());


        return redirect("/penjualan")->with("hasil", "Data penjualan Berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function show(penjualan $penjualan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function edit(penjualan $penjualan)
    {
        $pembeli = pembeli::all();

        return view("penjualan.edit", compact("penjualan", "pembeli"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, penjualan $penjualan)
    {

        penjualan::where("id", $penjualan->id)
            ->update([
                "id_pembeli" => $request->id_pembeli ? $request->id_pembeli : $penjualan->id_pembeli,
                "jumlah_total" => $request->jumlah_total ? $request->jumlah_total : $penjualan->jumlah_total,

            ]);

        return redirect("/penjualan")->with("hasil", "selamat data penjualan anda berhasil diedit!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function destroy(penjualan $penjualan)
    {
        // dd($penjualan);
        penjualan::destroy($penjualan->id);
        // $data = $this->penjualanModel->HapusDatapenjualan($penjualan->id);
        return redirect("/penjualan")->with("hasil", "selamat data anda berhasil dihapus!");
    }
}
