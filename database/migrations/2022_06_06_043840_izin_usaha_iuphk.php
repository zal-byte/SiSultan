<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IzinUsahaIuphk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::dropIfExists('izin_usaha_iuphk');
        Schema::create('izin_usaha_iuphk', function(Blueprint $table){
            $table->id();
            $table->bigInteger('id_iuphk')->unsigned();
            $table->bigInteger("id_usaha")->unsigned();
            $table->foreign('id_iuphk')->references('id')->on('iuphk')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('izin_usaha_iuphk');
    }
}
