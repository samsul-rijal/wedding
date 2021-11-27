<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMapsTable extends Migration
{
    public function up()
    {
        Schema::create('maps', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->string('embed');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('maps');
    }
}
