<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entretenimiento extends Model
{
    use HasFactory;

    protected $table = 'entretenimiento';

    protected $fillable = [
        'nombre',
        'precio',
        'marca',
        'caracteristicas',
        'stock',
    ];
}
