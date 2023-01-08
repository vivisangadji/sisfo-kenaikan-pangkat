<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarPengajuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_pengajuans', function (Blueprint $table) {
            $table->id();
            $table->string('no_pengajuan');
            $table->string('nama_personil');
            $table->date('tanggal_pengajuan');
            $table->string('pangkat_tujuan');
            $table->string('pangkat_sekarang');
            $table->string('alasan_ditolak');
            $table->string('status')->default('Proses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daftar_pengajuans');
    }
}
