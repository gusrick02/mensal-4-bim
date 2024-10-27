<?php

namespace App\Http\Controllers;

use App\Models\CargaHoraria;
use Illuminate\Http\Request;

class CargaHorariaController extends Controller
{
    public function index()
    {
        return CargaHoraria::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'horario_inicio' => 'required|date_format:H:i',
            'horario_fim' => 'required|date_format:H:i',
            'dia_semana' => 'required|string',
            'professor' => 'required|string',
        ]);

        $cargaHoraria = CargaHoraria::create($request->all());

        return response()->json($cargaHoraria, 201);
    }

    public function show($id)
    {
        return CargaHoraria::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'horario_inicio' => 'sometimes|date_format:H:i',
            'horario_fim' => 'sometimes|date_format:H:i',
            'dia_semana' => 'sometimes|string',
            'professor' => 'sometimes|string',
        ]);

        $cargaHoraria = CargaHoraria::findOrFail($id);
        $cargaHoraria->update($request->all());

        return response()->json($cargaHoraria);
    }

    public function destroy($id)
    {
        $cargaHoraria = CargaHoraria::findOrFail($id);
        $cargaHoraria->delete();

        return response()->json(null, 204);
    }
}
