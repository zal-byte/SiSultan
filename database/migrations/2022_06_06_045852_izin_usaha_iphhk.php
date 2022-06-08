<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IzinUsahaIphhk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::dropIfExists('izin_usaha_iphhk');
        Schema::create('izin_usaha_iphhk', function(Blueprint $table){
            $table->id();
            $table->bigInteger('id_iphhk')->unsigned();
            $table->bigInteger('id_usaha')->unsigned();
            $table->foreign('id_iphhk')->references('id')->on('iphhk')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('izin_usaha_iphhk');
    }
}
