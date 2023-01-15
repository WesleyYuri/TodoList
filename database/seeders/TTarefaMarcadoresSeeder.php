<?php

namespace Database\Seeders;

use App\Models\TTarefaMarcadores;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TTarefaMarcadoresSeeder extends Seeder
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
                'nome' => 'Importante',
                'abrev' => 'Importante',
                'descricao' => 'Tarefa importante.',
            ],
            [
                'nome' => 'Em análise',
                'abrev' => 'Em análise',
                'descricao' => 'Tarefa em análise.',
            ],
            [
                'nome' => 'Em análise 2',
                'abrev' => 'Em análise',
                'descricao' => 'Tarefa em análise.',
            ],
        ];

        foreach($data_array as $key => $data){
            TTarefaMarcadores::firstOrCreate(['t_tarefa_marcadores_id' => $key], $data);
        }
    }
}
