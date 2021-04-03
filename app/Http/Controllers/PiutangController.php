<?php

namespace App\Http\Controllers;

use App\piutang;
use App\pembeli;
use App\penjualan;

use Illuminate\Http\Request;

class PiutangController extends Controller
{

    public function __construct()
    {
        $this->piutangModel = new piutang();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = piutang::with("pembeli", "penjualan")->get();



        return view('piutang.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //mengarah ke halaman tambah piutang
        $pembeli = pembeli::all();
        $penjualan = penjualan::all();
        return view('piutang.create', compact('pembeli', 'penjualan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        piutang::create($request->all());


        return redirect("/piutang")->with("hasil", "Data piutang Berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\piutang  $piutang
     * @return \Illuminate\Http\Response
     */
    public function show(piutang $piutang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\piutang  $piutang
     * @return \Illuminate\Http\Response
     */
    public function edit(piutang $piutang)
    {
        $pembeli = pembeli::all();
        $penjualan = penjualan::all();
        return view('piutang.edit', compact('pembeli', 'penjualan', 'piutang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\piutang  $piutang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, piutang $piutang)
    {

        piutang::where("id", $piutang->id)
            ->update([
                "id_pembeli" => $request->id_pembeli ? $request->id_pembeli : $piutang->id_pembeli,
                "id_penjualan" => $request->id_penjualan ? $request->id_penjualan : $piutang->id_penjualan,
                "jumlah_bayar" => $request->jumlah_bayar ? $request->jumlah_bayar : $piutang->jumlah_bayar,

            ]);

        return redirect("/piutang")->with("hasil", "selamat data piutang anda berhasil diedit!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\piutang  $piutang
     * @return \Illuminate\Http\Response
     */
    public function destroy(piutang $piutang)
    {
        // dd($piutang);
        piutang::destroy($piutang->id);
        // $data = $this->piutangModel->HapusDatapiutang($piutang->id);
        return redirect("/piutang")->with("hasil", "selamat data anda berhasil dihapus!");
    }
}
