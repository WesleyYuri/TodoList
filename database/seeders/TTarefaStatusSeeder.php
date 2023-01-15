<?php

namespace Database\Seeders;

use App\Models\TTarefaStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TTarefaStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_array = [
            [
                't_tarefa_status_id' => TTarefaStatus::AGUARDANDO_ID,
                'nome' => 'Tarefa aguardando',
                'abrev' => 'Aguardando',
                'descricao' => 'Tarefa aguardando para ser atendida.',
            ],
            [
                't_tarefa_status_id' => TTarefaStatus::EM_ANDAMENTO_ID,
                'nome' => 'Tarefa em andamento',
                'abrev' => 'Em andamento',
                'descricao' => 'Tarefa em andamento.',
            ],
            [
                't_tarefa_status_id' => TTarefaStatus::CONCLUIDA_ID,
                'nome' => 'Tarefa concluída',
                'abrev' => 'Concluída',
                'descricao' => 'Tarefa concluída.',
            ],
            [
                't_tarefa_status_id' => TTarefaStatus::PAUSADA_ID,
                'nome' => 'Tarefa pausada',
                'abrev' => 'Pausada',
                'descricao' => 'Tarefa pausada.',
            ],
        ];

        foreach($data_array as $data){
            TTarefaStatus::firstOrCreate(['t_tarefa_status_id' => $data['t_tarefa_status_id']], $data);
        }
    }
}
