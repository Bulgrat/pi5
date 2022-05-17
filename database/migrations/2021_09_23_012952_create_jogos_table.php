<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJogosTable extends Migration
{

    public function up()
    {
        Schema::create('jogos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('images')->nullable();
            $table->text('video');
            $table->text('desc');
            $table->decimal('price');
            $table->text('link_dowload');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jogos');
    }
}
