<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();

        return response()->json($cursos);
    }

    public function destroy($id)
    {
        $curso = Curso::findOrFail($id);

        $curso->delete();

        return response()->json(['message' => 'Curso deletado com sucesso!'], 200);
    }

    public function store(Request $request)
    {

        $path = $request->file('file')->store('image','public');
        $request->validate([
            'titulo' => 'required',
            'descricao' => 'nullable',
            'carga_horaria' => 'required|integer',
        ]);

        $curso = Curso::create([
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            'carga_horaria' => $request->carga_horaria,
        ]);

        return response()->json($curso, 201);
    }
}
