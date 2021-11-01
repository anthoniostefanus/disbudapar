<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePariwisataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pariwisata', function (Blueprint $table) {
            $table->id();
            $table->string('nib', 18);
            $table->string('nama_usaha');
            $table->date('tanggal_berdiri');
            $table->string('no_telfon');
            $table->string('deskripsi_obyek_wisata');
            $table->string('omset');
            $table->string('aset');
            $table->string('alasan_mendaftar');
            $table->string('prestasi_usaha');
            $table->string('nik', 16)->unique();
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
        Schema::dropIfExists('pariwisata');
    }
}
