<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class detail_penjualan extends Model
{
    use SoftDeletes;
    protected $table = "detail_penjualans";

    protected $fillable = ['id_pembeli',  'id_barang',  'jumlah_barang', 'jumlah_harga', 'lunas','id_penjualan'];

    public function pembeli()
    {
        return $this->hasOne('App\pembeli', 'id', 'id_pembeli');
    }
    public function barang()
    {
        return $this->hasOne('App\barang', 'id', 'id_barang');
    }
    public function penjualan()
    {
        return $this->hasOne('App\penjualan', 'id', 'id_penjualan');
    }
}
