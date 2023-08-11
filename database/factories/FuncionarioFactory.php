<?php

namespace Database\Factories;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class FuncionarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => fake()->unique()->name,
            'email' => fake()->unique()->safeEmail,
            'senha' => Hash::make('senha123'),
            'data_nascimento' => fake()->date,
            'endereco' => fake()->address,
            'telefone' => fake()->unique()->phoneNumber,
            'periodo_trabalho' => fake()->randomElement(['8h às 12h', '14h às 18h', '19h às 23h']),
            'tipo_usuario' => 'funcionario',
        ];
    }
}
