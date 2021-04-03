<?php

namespace App\Http\Controllers;

use App\barang;
use App\pembeli;
use App\penjualan;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->BarangModel = new barang();
        $this->PembeliModel = new pembeli();
        $this->PenjualanModel = new penjualan();
    }
    public function index()
    {
        $barang = barang::all()->count();
        $pembeli = pembeli::all()->count();
        $penjualan = penjualan::all()->count();
        return view('user.home', compact('barang', 'pembeli', 'penjualan'));
    }
    public function transaksi()
    {
        return view('user.penjualan');
    }
}
