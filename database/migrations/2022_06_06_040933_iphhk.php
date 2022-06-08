<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Iphhk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::dropIfExists('iphhk');
        Schema::create('iphhk',function(Blueprint $table){
            $table->id();
            $table->string('jenis_industri_primer', 200);
            $table->text('titik_survey_koordinat');
            $table->string('produksi', 200);
            $table->string('realisasi_produksi',200);
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
        Schema::dropIfExists('iphhk');
    }
}
