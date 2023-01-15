<?php

namespace Database\Factories;

use App\Models\TTarefaStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TTarefas>
 */
class TTarefasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'titulo' => fake()->text(25),
            'descricao' => fake()->text(50),
            'eh_tarefa_pai' => true,
            't_tarefa_status_id' => TTarefaStatus::AGUARDANDO_ID,
        ];
    }
}
