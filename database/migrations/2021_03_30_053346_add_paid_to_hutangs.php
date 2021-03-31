<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPaidToHutangs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hutangs', function (Blueprint $table) {
            $table->string("id_pembeli");
            $table->string("id_penjualan");
            $table->string("jumlah_kurang");
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hutangs', function (Blueprint $table) {
            //
        });
    }
}
