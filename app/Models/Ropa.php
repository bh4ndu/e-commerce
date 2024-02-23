<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ropa extends Model
{
    use HasFactory;

    protected $table ='ropa';

    protected $fillable = [
        'nombre',
        'foto',
        'precio',
        'marca',
        'tipo',
        'descripcion',
        'stock'
    ];
}
