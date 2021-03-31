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
}
