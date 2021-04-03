<?php

namespace App\Http\Controllers;

use App\gudang;
use App\barang;

use Illuminate\Http\Request;

class GudangController extends Controller
{

    public function __construct()
    {
        $this->gudangModel = new gudang();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = gudang::with("barang")->get();

        return view('gudang.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //mengarah ke halaman tambah gudang
        $barang = barang::all();
        return view('gudang.create', compact("barang"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        gudang::create($request->all());


        return redirect("/gudang")->with("hasil", "Data gudang Berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function show(gudang $gudang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function edit(gudang $gudang)
    {
        return view("gudang.edit", compact("gudang"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gudang $gudang)
    {

        gudang::where("id", $gudang->id)
            ->update(["id_barang" => $request->id_barang ? $request->id_barang : $gudang->id_barang, "jumlah_barang" => $request->jumlah_barang ? $request->jumlah_barang : $gudang->jumlah_barang,

            ]);

        return redirect("/gudang")->with("hasil", "selamat data gudang anda berhasil diedit!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function destroy(gudang $gudang)
    {
        // dd($gudang);
        gudang::destroy($gudang->id);
        // $data = $this->gudangModel->HapusDatagudang($gudang->id);
        return redirect("/gudang")->with("hasil", "selamat data anda berhasil dihapus!");
    }
}
