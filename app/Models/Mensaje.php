<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    
    protected $table = 'messages';

    protected $fillable = [
        'correo',
        'mensaje',
        'color',
        'imagen_url'
    ];
}
