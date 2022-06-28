<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IndustriHasilHutan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::dropIfExists('industri_hasil_hutan');
        Schema::create('industri_hasil_hutan', function(Blueprint $table){
            $table->id();
            $table->string('nama_perusahaan');
            $table->text('longtitude');
            $table->text('latitude');
            $table->text('alamat');
            $table->string('telp_fax');
            $table->string('produk');
            $table->string('nama_penerbit_fako');
            $table->string('no_reg');
            $table->string('kapasitas');
            $table->string('masa_berlaku');
            $table->string('pemilik');
            $table->unsignedBigInteger('id_kota');
            $table->foreign('id_kota')->references('id')->on('kota')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
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
        Schema::dropIfExists('industri_hasil_hutan');
    }
}
