<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SensorData extends Model
{
    protected $fillable = [
        'sensor_name', // Add any other fields you want to allow for mass assignment
        // Other fillable fields here
        'temperature',
        'timestamp',
    ];

    // Ocultar los campos created_at y updated_at en las respuestas JSON
    protected $hidden = [
        'id',
        'created_at',
        'updated_at'
    ];
}
