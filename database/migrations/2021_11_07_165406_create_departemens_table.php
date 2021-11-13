<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartemensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departemens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sesi_id');
            $table->unsignedBigInteger('kelas_id');
            $table->foreign('sesi_id')->references('id')->on('sesi_fnds');
            $table->foreign('kelas_id')->references('id')->on('kelas');
            $table->string('nama');
            $table->string('link_zoom');
            $table->integer('kuota');
            $table->date('updated_at')->nullable();
            $table->date('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departemens');
    }
}