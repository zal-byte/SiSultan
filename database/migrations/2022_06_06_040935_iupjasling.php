<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Iupjasling extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::dropIfExists('iupjasling');
        Schema::create('iupjasling', function(Blueprint $table){
            $table->id();
            $table->string('jenis',100);
            $table->text('titik_survey_koordinat');
            $table->string('nomor_sk', 100);
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
        Schema::dropIfExists('iupjasling');
    }

}
