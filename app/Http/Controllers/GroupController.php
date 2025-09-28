<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GroupController extends Controller
{
    public function index()
    {
        $groups = [
            [
                'id_grupo' => 1,
                'fecha_creacion' => '2025-10-01',
                'nombre_grupo' => 'Equipo de MVP-1',
                'area' => 'Desarrollo de Software',
                'project' => 'Plataforma E-commerce',
                'members_count' => 8,
                'color' => 'blue',
                'descripcion' => 'Equipo especializado en desarrollo de aplicaciones web con Laravel y Vue.js'
            ],
            [
                'id_grupo' => 2,
                'fecha_creacion' => '2025-09-15',
                'nombre_grupo' => 'Equipo de IA',
                'area' => 'Desarrollo de Software',
                'project' => 'App Mobile Banking',
                'members_count' => 5,
                'color' => 'purple',
                'descripcion' => 'Desarrollo de aplicaciones nativas y multiplataforma'
            ],
            [
                'id_grupo' => 3,
                'fecha_creacion' => '2025-05-23',
                'nombre_grupo' => 'Equipo de Redes Sociales',
                'area' => 'Marketing Digital',
                'project' => 'Campaña Q4 2025',
                'members_count' => 6,
                'color' => 'pink',
                'descripcion' => 'Gestión de contenido y estrategias en redes sociales'
            ],
        ];

        return view('groups.index', compact('groups'));
    }
}