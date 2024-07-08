<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoleLocation extends Model
{
    use HasFactory;
    protected $fillable = [
        'pole_id',            
        'pole_name',
        'base_level',
        'flood_level',
        'flood_max',
        'UTM_E',
        'UTM_N',
        'lat',
        'long',
        'pix',
        'created_at',
        'updated_at'
    ];
}
