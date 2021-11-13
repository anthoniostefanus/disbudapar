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
            $table->string('nama-usaha');
            $table->date('tgl-mulai');
            $table->string('nomor-nib')->unique();
            $table->string('address');
            $table->string('no-te');
            $table->string('subj-usaha');
            $table->string('desc');
            $table->string('omset');
            $table->string('aset');
            $table->string('alasan');
            $table->string('prestasi');
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
