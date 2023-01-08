<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personils', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('nrp')->unique();
            $table->string('no_hp')->unique();
            $table->string('foto')->nullable();
            $table->string('pangkat_sekarang')->nullable();
            $table->string('ttl')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('password')->nullable();
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
        Schema::dropIfExists('personils');
    }
}
