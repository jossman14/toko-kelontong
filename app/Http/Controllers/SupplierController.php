<?php

namespace App\Http\Controllers;

use App\supplier;

use Illuminate\Http\Request;

class SupplierController extends Controller
{

    public function __construct()
    {
        $this->supplierModel = new supplier();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = supplier::all();


        return view('supplier.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //mengarah ke halaman tambah supplier
        return view('supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        supplier::create($request->all());


        return redirect("/supplier")->with("hasil", "Data supplier Berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(supplier $supplier)
    {
        return view("supplier.edit", compact("supplier"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, supplier $supplier)
    {

        supplier::where("id", $supplier->id)
            ->update([
                "nama_supplier" => $request->nama_supplier ? $request->nama_supplier : $supplier->nama_supplier,
                "alamat" => $request->alamat ? $request->alamat : $supplier->alamat,
                "no_hp" => $request->no_hp ? $request->no_hp : $supplier->no_hp,
                "catatan" => $request->catatan ? $request->catatan : $supplier->catatan,

            ]);

        return redirect("/supplier")->with("hasil", "selamat data supplier anda berhasil diedit!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(supplier $supplier)
    {
        // dd($supplier);
        supplier::destroy($supplier->id);
        // $data = $this->supplierModel->HapusDatasupplier($supplier->id);
        return redirect("/supplier")->with("hasil", "selamat data anda berhasil dihapus!");
    }
}
