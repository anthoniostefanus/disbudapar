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
            $table->string('judul_beritapariwisata');
            $table->string('isi_beritapariwisata');
            $table->string('linkpariwisata');
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
