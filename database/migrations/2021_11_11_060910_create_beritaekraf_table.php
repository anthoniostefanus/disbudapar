<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeritaekrafTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beritaekraf', function (Blueprint $table) {
            $table->id();
            $table->string('judul_beritaekraf1');
            $table->string('isi_beritaekraf1');
            $table->string('linkekraf1');
            $table->string('judul_beritaekraf2');
            $table->string('isi_beritaekraf2');
            $table->string('linkekraf2');
            $table->string('judul_beritaekraf3');
            $table->string('isi_beritaekraf3');
            $table->string('linkekraf3');
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
        Schema::dropIfExists('beritaekraf');
    }
}
