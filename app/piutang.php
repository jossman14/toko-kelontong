<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class piutang extends Model
{
    use SoftDeletes;
    protected $table = "piutangs";

    protected $fillable = ['id_pembeli',  'id_penjualan', "jumlah_bayar"];
}
