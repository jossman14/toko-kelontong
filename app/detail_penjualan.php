<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class detail_penjualan extends Model
{
    use SoftDeletes;
    protected $table = "detail_penjualans";

    protected $fillable = ['id_pembeli',  'id_barang',  'jumlah_barang', 'jumlah_harga', 'lunas','id_penjualan'];
}
