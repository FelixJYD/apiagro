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
    ];
}
