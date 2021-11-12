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
            $table->string('judul_beritasalatiga');
            $table->string('isi_beritasalatiga');
            $table->string('linksalatiga');
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
