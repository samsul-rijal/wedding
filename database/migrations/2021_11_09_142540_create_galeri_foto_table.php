<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGaleriFotoTable extends Migration
{
    public function up()
    {
        Schema::create('galeri_foto', function (Blueprint $table) {
            $table->id();
            $table->string('keterangan')->nullable();
            $table->string('gambar');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('galeri_foto');
    }
}
