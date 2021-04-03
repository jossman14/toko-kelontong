<?php

namespace App\Http\Controllers;

use App\barang;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->BarangModel = new barang();
    }
    public function index()
    {
        $barang = barang::all()->count();
        return view('user.home', compact('barang'));
    }
    public function transaksi()
    {
        return view('user.penjualan');
    }
}
