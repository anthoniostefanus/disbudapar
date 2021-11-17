<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeritapariwisataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beritapariwisata', function (Blueprint $table) {
            $table->id();
            $table->string('judul_beritapariwisata1');
            $table->string('isi_beritapariwisata1');
            $table->string('linkpariwisata1');
            $table->string('judul_beritapariwisata2');
            $table->string('isi_beritapariwisata2');
            $table->string('linkpariwisata2');
            $table->string('judul_beritapariwisata3');
            $table->string('isi_beritapariwisata3');
            $table->string('linkpariwisata3');
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
        Schema::dropIfExists('beritapariwisata');
    }
}
