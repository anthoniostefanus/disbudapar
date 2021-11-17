<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeritasalatigaTable extends Migration
{
   /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beritasalatiga', function (Blueprint $table) {
            $table->id();
            $table->string('judul_beritasalatiga1');
            $table->string('isi_beritasalatiga1');
            $table->string('linksalatiga1');
            $table->string('judul_beritasalatiga2');
            $table->string('isi_beritasalatiga2');
            $table->string('linksalatiga2');
            $table->string('judul_beritasalatiga3');
            $table->string('isi_beritasalatiga3');
            $table->string('linksalatiga3');
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
        Schema::dropIfExists('beritasalatiga');
    }
}
