<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HutanRakyat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::dropIfExists('hutan_rakyat');
        Schema::create('hutan_rakyat', function(Blueprint $table){
            $table->id();
            $table->string('pemilik', 100);
            $table->string('kabupaten', 100);
            $table->string('kecamatan', 100);
            $table->string('desa', 100);
            $table->text('titik_survey_koordinat');
            $table->float('luas');
            $table->integer('produksi');
            $table->float('sengon');
            $table->float('jati');
            $table->float('rimba_campuran');
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
        Schema::dropIfExists('hutan_rakyat');
    }
}
