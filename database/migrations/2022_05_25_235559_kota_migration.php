<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class KotaMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::dropIfExists('kota');
        Schema::create(
            'kota', function(Blueprint $table){
                $table->increments('kota_id');
                $table->string('kota_nama', 50);
                $table->text('kota_gambar');
                $table->text('kota_tentang');
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('kota');
    }
}
