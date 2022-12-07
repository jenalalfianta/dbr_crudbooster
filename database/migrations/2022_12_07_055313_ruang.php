<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ruang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruang', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('prodi_kode')->unsigned();
            $table->string('ruang_kode');
            $table->string('ruang_nama');
            $table->integer('ruang_luas');
            $table->integer('ruang_lantai');
            $table->timestamps();
        });

        Schema::table('ruang', function($table) {
            $table->foreign('prodi_kode')->references('id')->on('prodi');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ruang');
    }
}
