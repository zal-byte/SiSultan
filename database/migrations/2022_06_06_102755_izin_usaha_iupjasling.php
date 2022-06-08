<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IzinUsahaIupjasling extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::dropIfExists('izin_usaha_iupjasling');
        Schema::create('izin_usaha_iupjasling', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('id_iupjasling');
            $table->unsignedBigInteger('id_usaha');
            $table->foreign('id_iupjasling')->references('id')->on('iupjasling')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('izin_usaha_iupjasling');
    }
}
