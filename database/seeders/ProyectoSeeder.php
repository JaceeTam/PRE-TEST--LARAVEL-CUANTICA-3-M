<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Empresa;
use App\Models\Proyecto;

class ProyectoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // 1. Asegúrate de que existe una empresa a la cual asignarle el proyecto
        // Si no existe ninguna, crea una por si acaso
        $empresa = Empresa::first();

        // 2. Crea un proyecto y asígnale el ID de la empresa
        Proyecto::create([
            'nombre' => 'Proyecto Control de Asistencia',
            'descripcion' => 'Desarrollo de una aplicación web para gestión interna.',
            'fecha_inicio' => '2025-01-15',
            'fecha_fin' => '2025-06-30',
            'estado' => 'activo',
            'empresa_id' => $empresa->id,
        ]);
    }
}
