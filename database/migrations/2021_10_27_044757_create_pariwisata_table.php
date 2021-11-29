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
            $table->string('Nama_Usaha');
            $table->date('Tanggal_Mulai');
            $table->string('nib');
            $table->string('Alamat');
            $table->string('No_Telepen');
            $table->string('desc');
            $table->string('omset');
            $table->string('aset');
            $table->string('alasan');
            $table->string('prestasi');
            $table->string('berkas');
            $table->string('user_id');
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
