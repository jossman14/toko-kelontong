<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class barang extends Model
{

    use SoftDeletes;
    protected $table = "barangs";
    protected $fillable = ['nama_barang',  'harga',  'diskon', 'jumlah_stok', 'kadaluarsa', 'id_supplier'];

    public function AllDataBarang()
    {
        return DB::table('barangs')->get();
    }
    public function TambahDataBarang($data)
    {
        return DB::table('barangs')->insert($data);
    }
    public function HapusDataBarang($data)
    {
        return DB::table('barangs')->when("id", $data)->delete($data);
    }

    public function supplier()
    {
        return $this->hasOne('App\supplier', 'id', 'id_supplier');
    }

    public function detail_penjualan()
    {
        return $this->belongsTo('App\detail_penjualan', 'id_barang', 'id');
    }

    public function gudang()
    {
        return $this->belongsTo('App\detail_penjualan', 'id_barang', 'id');
    }
}
