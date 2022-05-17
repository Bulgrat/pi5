<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriandoRelacaoJogoUsuario extends Migration
{
    public function up()
    {
        Schema::table('jogos', function (Blueprint $table) {
            $table->integer('user_id');
        });
    }

    public function down()
    {
        Schema::table('jogos', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
    }
}
