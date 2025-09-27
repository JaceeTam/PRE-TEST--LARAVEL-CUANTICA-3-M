<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Rodrigo Galle',
            'email' => 'rodrigogalle14@gmail.com',
            'password' => bcrypt('mimundopq'),
        ]);

        User::factory()->create([
            'name' => 'Anderson Fernández',
            'email' => 'andersonfernandez@gmail.com',
            'password' => bcrypt('00000000'),
        ]);



        $this->call([
            EmpresaSeeder::class,
            ProyectoSeeder::class,
            SprintSeeder::class,
        ]);
    }
}
