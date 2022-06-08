<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IzinUsahaIuphhbk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::dropIfExists('izin_usaha_iuphhbk');
        Schema::create('izin_usaha_iuphhbk', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('id_usaha');
            $table->unsignedBigInteger('id_iuphhbk');
            $table->foreign('id_iuphhbk')->references('id')->on('iuphhbk')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_usaha')->references('id')->on('usaha')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('izin_usaha_iuphhbk');
    }
}
