<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memory extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'destination',
        'nights',
        'days',
        'departure_time',
        'departure_location',
        'schedule',
        'thoughts',
        'images',
    ];

    protected $casts = [
        'images' => 'array',
    ];
}
