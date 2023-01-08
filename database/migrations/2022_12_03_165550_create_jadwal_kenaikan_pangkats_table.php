<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalKenaikanPangkatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_kenaikan_pangkats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('personil_id');
            $table->foreign('personil_id')->references('id')->on('personils')->onDelete('cascade');
            $table->date('jadwal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal_kenaikan_pangkats');
    }
}
