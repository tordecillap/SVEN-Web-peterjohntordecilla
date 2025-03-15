<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = ['frequency', 'start_date', 'days', 'time', 'notes'];

    protected $casts = [
        'days' => 'array', // Store days as JSON
    ];
}