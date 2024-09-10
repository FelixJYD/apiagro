<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SensorDataController;


Route::get('/sensor-data', [SensorDataController::class, 'index']); // Obtener todos los datos
Route::post('/sensor-data', [SensorDataController::class, 'store']); // Guardar datos
Route::get('/sensor-data/{id}', [SensorDataController::class, 'show']); // Obtener un dato por ID
