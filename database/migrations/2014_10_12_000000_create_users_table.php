<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('level');
            $table->string('No_Telepon');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('nik', 16)->unique();
            $table->string('nama_depan');
            $table->string('nama_belakang');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('alamat');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('rt');
            $table->string('rw');
            $table->string('agama');
            $table->string('kwn');
            $table->string('pekerjaan');
            $table->string('warga');
            $table->string('berkas');
            $table->string('nama_ibu');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
