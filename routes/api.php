<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\AlunosController;

Route::apiResource('cursos', CursoController::class);

Route::apiResource('/alunos', AlunosController::class);

Route::get('/alunos-cursos', [AlunosController::class, 'indexWithCursos']);


