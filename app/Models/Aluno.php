<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Aluno;


class Aluno extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'email', 'idade', 'image','curso_id'];


public function curso()
{
    return $this->belongsTo(Curso::class); 

}

}