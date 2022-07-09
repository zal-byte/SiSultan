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
        Schema::dropIfExists('usaha');
        Schema::create('usaha', function(Blueprint $table){
            $table->id();
            $table->string('nama_perusahaan');
            $table->text('koordinat')->nullable();
            $table->text('alamat')->nullable();
            $table->string('telp_fax')->nullable();
            $table->string('produk')->nullable();
            $table->string('nama_penerbit_fako')->nullable();
            $table->string('no_reg')->nullable();
            $table->string('kapasitas')->nullable();
            $table->string('masa_berlaku')->nullable();
            $table->string('pemilik')->nullable();
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
        Schema::dropIfExists('usaha');
    }
}
