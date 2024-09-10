<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SensorData;
use Illuminate\Http\Request;

class SensorDataController extends Controller
{
    // Obtener todos los datos
    public function index()
    {
        return SensorData::all();
    }

    // Guardar los datos enviados
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'sensor_name' => 'required|string',
            'temperature' => 'required|numeric',
        ]);

        $sensorData = SensorData::create([
            'sensor_name' => $validatedData['sensor_name'],
            'temperature' => $validatedData['temperature'],
            'timestamp' => now(), // Puedes usar la marca de tiempo actual o la que envíes
        ]);

        return response()->json(['message' => 'Datos guardados exitosamente', 'data' => $sensorData], 201);
    }

    // Mostrar datos específicos por ID
    public function show($id)
    {
        $sensorData = SensorData::find($id);

        if ($sensorData) {
            return $sensorData;
        } else {
            return response()->json(['message' => 'Dato no encontrado'], 404);
        }
    }
}

