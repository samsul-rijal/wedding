<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusikTable extends Migration
{
    public function up()
    {
        Schema::create('musik', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('audio');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('musik');
    }
}
