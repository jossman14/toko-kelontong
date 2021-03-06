<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class supplier extends Model
{
    use SoftDeletes;
    protected $table = "suppliers";

    protected $fillable = ['nama_supplier',  'alamat', "no_hp", "catatan"];


    public function barang()
    {
        return $this->belongsTo('App\barang', 'id_supplier', 'id');
    }
}
