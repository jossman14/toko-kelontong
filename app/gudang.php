<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class gudang extends Model
{
    use SoftDeletes;
    protected $table = "gudangs";

    protected $fillable = ['id_barang',  'jumlah_barang'];

    public function barang()
    {
        return $this->hasOne('App\barang', 'id', 'id_barang');
    }
}
