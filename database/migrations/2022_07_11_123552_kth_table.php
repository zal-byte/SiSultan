<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class KthTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::dropIfExists('kth_table');

        Schema::create('kth_table', function(Blueprint $table){
            $table->id();
            $table->string('cdk');
            $table->string('nama_kelompok');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->string('desa');
            $table->string('tahun_pendirian');
            $table->string('tanggal_no_legalitas');
            $table->string('legalitas_jabatan_penandatanganan');
            $table->text('koordinat_sekertariat_kelompok');
            $table->text('kelas_kelompok');
            $table->integer('jumlah_anggota');
            $table->string('nama_ketua');
            $table->string('jenis_kegiatan');

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
        Schema::dropIfExists('kth_table');
    }
}
