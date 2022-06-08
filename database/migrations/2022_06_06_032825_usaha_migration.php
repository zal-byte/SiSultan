<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsahaMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('usaha', function(Blueprint $table){
            $table->id();
            $table->text("nama_perusahaan");
            $table->string('pemilik', 100);
            $table->string("kota",100);
            $table->string("kecamatan", 100);
            $table->string("desa", 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('usaha');
    }
}
