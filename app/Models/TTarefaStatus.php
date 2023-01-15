<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TTarefaStatus extends Model
{
    use HasFactory;

    const AGUARDANDO_ID = 1;
    const EM_ANDAMENTO_ID = 2;
    const CONCLUIDA_ID = 3;
    const PAUSADA_ID = 4;

    public $table = "t_tarefa_status";
}
