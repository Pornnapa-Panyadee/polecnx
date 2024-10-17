<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class FloodMark extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'affected_area',
        'place_detail',
        'latitude',
        'longitude',
        'place_around',
        'water_level',
        'tool',
        'note',
        'created_at',
        'updated_at'
    ];
}
