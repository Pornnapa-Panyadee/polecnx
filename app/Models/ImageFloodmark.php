<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageFloodmark extends Model
{
    use HasFactory;
    protected $fillable = [
        'code_mark',
        'image_path',
        'created_at',
        'updated_at'
    ];
}
