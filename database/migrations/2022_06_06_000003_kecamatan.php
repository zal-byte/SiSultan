<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kecamatan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('kecamatan');
        Schema::create('kecamatan', function(Blueprint $table){
            $table->id();
            $table->string('nama', 100);
            $table->unsignedBigInteger('id_kota');
            $table->foreign('id_kota')->references('id')->on('kota')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('kecamatan');
    }
}
