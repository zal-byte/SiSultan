<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Iuphk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::dropIfExists('iuphk');
        Schema::create('iuphk', function(Blueprint $table){
            $table->id();
            $table->text('titik_survey_koordinat');
            $table->string('nomor_sk', 100);
            $table->integer('luas_area');
            $table->integer('volume_produksi');
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
        Schema::dropIfExists('iuphk');
    }
}
