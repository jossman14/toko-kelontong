<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.home');
    }
    public function transaksi()
    {
        return view('user.penjualan');
    }
}
