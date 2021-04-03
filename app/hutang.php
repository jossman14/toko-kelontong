<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class hutang extends Model
{
    use SoftDeletes;
    protected $table = "hutangs";

    protected $fillable = ['id_pembeli',  'id_penjualan', 'jumlah_kurang'];

    public function pembeli()
    {
        return $this->hasOne('App\pembeli', 'id', 'id_pembeli');
    }
    public function penjualan()
    {
        return $this->hasOne('App\penjualan', 'id', 'id_penjualan');
    }

}
