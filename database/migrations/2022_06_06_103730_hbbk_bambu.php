<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HbbkBambu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::dropIfExists('hhbk_bambu');
        Schema::create('hhbk_bambu', function(Blueprint $table){
            $table->id();
            $table->string('pemilik', 100);
            $table->string('kabupaten',100);
            $table->string('kecamatan',100);
            $table->string('desa', 100);
            $table->text('titik_survey_koordinat');
            $table->double('luas');
            $table->double('produksi');
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
        Schema::dropIfExists('hhbk_bambu');
    }
}
