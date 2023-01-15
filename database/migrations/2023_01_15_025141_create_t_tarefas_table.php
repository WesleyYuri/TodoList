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
        Schema::create('t_tarefas', function (Blueprint $table) {
            $table->bigIncrements('t_tarefa_id');
            
            $table->unsignedBigInteger('t_tarefa_pai_id')->nullable();
            $table->foreign('t_tarefa_pai_id')->references('t_tarefa_id')->on('t_tarefas');

            $table->unsignedBigInteger('t_tarefa_status_id');
            $table->foreign('t_tarefa_status_id')->references('t_tarefa_status_id')->on('t_tarefa_status');

            $table->string('titulo');
            $table->string('descricao');
            $table->boolean('eh_tarefa_pai');
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
        Schema::dropIfExists('t_tarefas');
    }
};
