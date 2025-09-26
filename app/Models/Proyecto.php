<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'fecha_inicio', 'fecha_fin', 'estado', 'empresa_id'];

    // Un proyecto pertenece a una empresa
    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }

    // Un proyecto tiene múltiples sprints
    public function sprints()
    {
        return $this->hasMany(Sprint::class);
    }
}
