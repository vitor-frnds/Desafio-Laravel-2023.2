<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // Chama o seu AdministradorSeeder
        $this->call(AdministradorSeeder::class);

        // Chama o FuncionarioSeeder
        $this->call(FuncionarioSeeder::class);

        // Chama o ProprietarioSeeder
        $this->call(ProprietarioSeeder::class);
    }
}
