<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class penjualan extends Model
{
    use SoftDeletes;
    protected $table = "penjualans";

    protected $fillable = ['id_pembeli',  'jumlah_total'];

    public function detail_penjualan()
    {
        return $this->belongsTo('App\detail_penjualan', 'id_penjualan', 'id');
    }
}
