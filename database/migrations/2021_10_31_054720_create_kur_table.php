<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kur', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nik');
            $table->string('no_tlp');
            $table->string('Kelurahan');
            $table->string('Kecamatan');
            $table->string('rt');
            $table->string('rw');
            $table->string('address');
            $table->string('jumlah_pinjaman');
            $table->string('pinjaman');
            $table->string('survei');
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
        Schema::dropIfExists('kur');
    }
}
