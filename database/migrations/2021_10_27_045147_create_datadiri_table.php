<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatadiriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datadiri', function (Blueprint $table) {
            $table->id();
            $table->string('nik', 16);
            $table->string('nama_depan');
            $table->string('nama_belakang');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('alamat');
            $table->string('rt');
            $table->string('rw');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kota');
            $table->string('agama');
            $table->string('status_perkawinan');
            $table->string('kewarganegaraan');
            $table->string('username_user')->unique();
            $table->string('password');
            $table->string('email')->unique();
            $table->string('nama_ibu_kandung');
            $table->string('no_handphone');
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
        Schema::dropIfExists('datadiri');
    }
}
