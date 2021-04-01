<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class hutang extends Model
{
    use SoftDeletes;
    protected $table = "hutangs";

    protected $fillable = ['id_pembeli',  'id_penjualan', 'jumlah_kurang'];

}
