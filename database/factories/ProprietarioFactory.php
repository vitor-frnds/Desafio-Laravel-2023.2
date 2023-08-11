<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProprietarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => fake()->name,
            'foto' => fake()->imageUrl(),
            'email' => fake()->unique()->safeEmail,
            'cpf' => fake()->unique()->numerify('###########'),
            'data_nascimento' => fake()->date,
            'endereco' => fake()->address,
            'telefone' => fake()->unique()->phoneNumber,
        ];
    }
}
