<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up ()
    {
        Schema::create('agendamentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('cliente');
            $table->dateTime('dataHora');
            $table->decimal('valor');
            $table->integer('funcionario_id');
            $table->integer('servicos_id');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agendamentos');
    }
}
