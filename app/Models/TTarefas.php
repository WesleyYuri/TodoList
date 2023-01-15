<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TTarefas extends Model
{
    use HasFactory;

    public $table = "t_tarefas";
    protected $primaryKey = 't_tarefa_id';

    public function grupoTarefas(){
        return $this->hasMany(TTarefas::class, 't_tarefa_pai_id', 't_tarefa_id');
    }

    public function status(){
        return $this->belongsTo(TTarefaStatus::class, 't_tarefa_status_id', 't_tarefa_status_id');
    }

    public function marcadores(){
        return $this->belongsToMany(TTarefaMarcadores::class, null, 't_tarefa_id', 't_tarefa_marcadores_id');
    }
}
