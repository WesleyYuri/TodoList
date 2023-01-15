<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_tarefa_marcadores_t_tarefas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';

            $table->bigIncrements('id');

            $table->unsignedBigInteger('t_tarefa_id');
            $table->foreign('t_tarefa_id')->references('t_tarefa_id')->on('t_tarefas')->onDelete('cascade');

            $table->unsignedBigInteger('t_tarefa_marcadores_id');
            $table->foreign('t_tarefa_marcadores_id')->references('t_tarefa_marcadores_id')->on('t_tarefa_marcadores')->onDelete('cascade');

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
        Schema::dropIfExists('t_tarefa_marcadores_t_tarefas');
    }
};
