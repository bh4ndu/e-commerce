<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Ropa;
use Illuminate\Database\Seeder;

class RopaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ropa = new Ropa();
        $ropa->marca = "California";
        $ropa->nombre = "Camisa California all time winners";
        $ropa->tipo =" Fit: Relax Clase: Camisa Tipo de tela: Viscosa Tipo de manga: Corta Tipo de tejido: Punto";
        $ropa->precio ="54.95";
        $ropa->descripcion ="camisa de boton con cuello y bordes blanco con negro, de estampado California all time winners, con talla en M, S, y L";
        $ropa->stock = "55";  
        $ropa-> save();

    }
}
