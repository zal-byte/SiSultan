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
            $table->text("nama_perusahaan");
            $table->string('pemilik', 100);
            $table->unsignedBigInteger('id_kota');
            $table->unsignedBigInteger('id_kecamatan');
            $table->unsignedBigInteger('id_desa');
            $table->foreign('id_kecamatan')->references('id')->on('kecamatan')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_kota')->references('id')->on('kota')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_desa')->references('id')->on('desa')->onDelete('cascade')->onUpdate('cascade');
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
