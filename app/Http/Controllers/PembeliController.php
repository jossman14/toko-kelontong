<?php

namespace App\Http\Controllers;

use App\pembeli;

use Illuminate\Http\Request;

class PembeliController extends Controller
{

    public function __construct()
    {
        $this->pembeliModel = new pembeli();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = pembeli::all();


        return view('pembeli.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //mengarah ke halaman tambah pembeli
        return view('pembeli.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        pembeli::create($request->all());


        return redirect("/pembeli")->with("hasil", "Data pembeli Berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function show(pembeli $pembeli)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function edit(pembeli $pembeli)
    {
        return view("pembeli.edit", compact("pembeli"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pembeli $pembeli)
    {

        pembeli::where("id", $pembeli->id)
            ->update([
                "nama" => $request->nama ? $request->nama : $pembeli->nama,
                "alamat" => $request->alamat ? $request->alamat : $pembeli->alamat,
                "no_hp" => $request->no_hp ? $request->no_hp : $pembeli->no_hp,

            ]);

        return redirect("/pembeli")->with("hasil", "selamat data pembeli anda berhasil diedit!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function destroy(pembeli $pembeli)
    {
        // dd($pembeli);
        pembeli::destroy($pembeli->id);
        // $data = $this->pembeliModel->HapusDatapembeli($pembeli->id);
        return redirect("/pembeli")->with("hasil", "selamat data anda berhasil dihapus!");
    }
}
