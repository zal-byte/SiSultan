<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Desa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::dropIfExists('desa');
        Schema::create('desa', function(Blueprint $table){
            $table->id();
            $table->string('nama', 100);
            $table->unsignedBigInteger('id_kota');
            $table->unsignedBigInteger('id_kecamatan');
            $table->foreign('id_kota')->references('id')->on('kota')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_kecamatan')->references('id')->on('kecamatan')->onDelete("cascade")->onUpdate('cascade');
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
        Schema::dropIfExists('desa');
    }
}
