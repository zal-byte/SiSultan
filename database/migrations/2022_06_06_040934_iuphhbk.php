<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Iuphhbk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('iuphhbk');
        Schema::create('iuphhbk',function(Blueprint $table){
            $table->id();
            $table->string('jenis_hhbk',100);
            $table->text('titik_survey_koordinat');
            $table->string('nomor_sk',100);
            $table->integer('volume_produksi');
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
        Schema::dropIfExists('iuphhbk');
    }
}
