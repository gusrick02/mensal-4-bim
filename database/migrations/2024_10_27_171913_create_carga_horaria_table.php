<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCargaHorariaTable extends Migration
{
    public function up()
    {
        Schema::create('carga_horaria', function (Blueprint $table) {
            $table->id();
            $table->time('horario_inicio');
            $table->time('horario_fim');
            $table->string('dia_semana');
            $table->string('professor'); // Definido como string
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('carga_horaria');
    }
}
