<?php

namespace Database\Seeders;

use App\Models\TTarefas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TTarefasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\TTarefas::factory(3)->create();
        \App\Models\TTarefas::factory(3)->create([
            't_tarefa_pai_id' => fake()->randomElement(TTarefas::all())['t_tarefa_id'],
            'eh_tarefa_pai' => false,
        ]);
    }
}
