<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class piutang extends Model
{
    use SoftDeletes;
    protected $table = "piutangs";

    protected $fillable = ['id_pembeli',  'id_penjualan', "jumlah_bayar"];

    public function pembeli()
    {
        return $this->hasOne('App\pembeli', 'id', 'id_pembeli');
    }
    public function penjualan()
    {
        return $this->hasOne('App\penjualan', 'id', 'id_penjualan');
    }
}
