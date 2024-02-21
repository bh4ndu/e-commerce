<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Electronicos extends Model
{
    use HasFactory;
    
    protected $table = 'electronicos';

    protected $fillable = [
        'nombre',
        'precio',
        'marca',
        'caracteristicas',
        'stock'
    ];
}
