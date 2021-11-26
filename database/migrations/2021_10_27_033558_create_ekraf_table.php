<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEkrafTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ekraf', function (Blueprint $table) {
            $table->id();
            $table->string('nama_usaha');
            $table->date('tgl_mulai');
            $table->string('nomor_nib')->unique();
            $table->string('address');
            $table->string('no_te');
            $table->string('subj_usaha');
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
        Schema::dropIfExists('ekraf');
    }
}
