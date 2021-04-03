<?php

namespace App\Http\Controllers;

use App\hutang;

use Illuminate\Http\Request;

class HutangController extends Controller
{

    public function __construct()
    {
        $this->hutangModel = new hutang();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = hutang::with("pembeli", "penjualan")->get();

        return view('hutang.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //mengarah ke halaman tambah hutang
        return view('hutang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        hutang::create($request->all());


        return redirect("/hutang")->with("hasil", "Data hutang Berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\hutang  $hutang
     * @return \Illuminate\Http\Response
     */
    public function show(hutang $hutang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\hutang  $hutang
     * @return \Illuminate\Http\Response
     */
    public function edit(hutang $hutang)
    {
        return view("hutang.edit", compact("hutang"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\hutang  $hutang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hutang $hutang)
    {

        hutang::where("id", $hutang->id)
            ->update([
                "id_pembeli" => $request->id_pembeli ? $request->id_pembeli : $hutang->id_pembeli,
                "id_penjualan" => $request->id_penjualan ? $request->id_penjualan : $hutang->id_penjualan,
                "jumlah_kurang" => $request->jumlah_kurang ? $request->jumlah_kurang : $hutang->jumlah_kurang,

            ]);

        return redirect("/hutang")->with("hasil", "selamat data hutang anda berhasil diedit!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\hutang  $hutang
     * @return \Illuminate\Http\Response
     */
    public function destroy(hutang $hutang)
    {
        // dd($hutang);
        hutang::destroy($hutang->id);
        // $data = $this->hutangModel->HapusDatahutang($hutang->id);
        return redirect("/hutang")->with("hasil", "selamat data anda berhasil dihapus!");
    }
}
