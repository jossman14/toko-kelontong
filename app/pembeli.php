<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class pembeli extends Model
{
    use SoftDeletes;
    protected $table = "pembelis";

    protected $fillable = ['nama',  'alamat', 'no_hp'];

    public function detail_penjualan()
    {
        return $this->belongsTo('App\detail_penjualan', 'id_pembeli', 'id');
    }
}
