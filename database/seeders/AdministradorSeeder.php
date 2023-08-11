<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            'nome' => 'Administrador',
            'email' => 'admin@gmail.com',
            'senha' => Hash::make('admin123'),
            'data_nascimento' => fake()->date,
            'endereco' => fake()->address,
            'telefone' => fake()->phoneNumber,
            'periodo_trabalho' => '8h às 18h',
            'tipo_usuario' => 'administrador',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
