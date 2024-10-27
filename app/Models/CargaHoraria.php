<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CargaHoraria extends Model
{
    use HasFactory;

    protected $table = 'carga_horaria';

    protected $fillable = [
        'horario_inicio',
        'horario_fim',
        'dia_semana',
        'professor',
    ];
}

