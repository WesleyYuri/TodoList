<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TTarefaMarcadores extends Model
{
    use HasFactory;

    public $table = "t_tarefa_marcadores";
    protected $primaryKey = 't_tarefa_marcadores_id';
}
