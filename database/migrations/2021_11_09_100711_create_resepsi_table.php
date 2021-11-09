<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResepsiTable extends Migration
{
    public function up()
    {
        Schema::create('resepsi', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('jam_mulai');
            $table->string('jam_selesai');
            $table->string('tempat');
            $table->string('maps')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('resepsi');
    }
}
