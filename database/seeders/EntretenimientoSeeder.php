<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Entretenimiento;
use Illuminate\Database\Seeder;

class EntretenimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $entretenimiento = new Entretenimiento();
        $entretenimiento->marca = "d@g";
        $entretenimiento->nombre = "Fusil Cm18 Mod1 Airsoft";
        $entretenimiento->caracteristicas =" color arena";
        $entretenimiento->precio ="1800";
        $entretenimiento->stock = "5";  
        $entretenimiento-> save();

        $entretenimiento2 = new Entretenimiento();
        $entretenimiento2->marca = "desconocida";
        $entretenimiento2->nombre = "Pistola De Agua Eléctrica Para Niños Y Adultos P90";
        $entretenimiento2->caracteristicas ="dispara de forma electrica , color blanco y negro ";
        $entretenimiento2->precio ="84";
        $entretenimiento2->stock = "30";  
        $entretenimiento2-> save();

        $entretenimiento3 = new Entretenimiento();
        $entretenimiento3->marca = "sam";
        $entretenimiento3->nombre = "Xbox 360";
        $entretenimiento3->caracteristicas ="Capacidad 250 GB Memoria RAM 512 MB Tipo de consola De sobremesa Cantidad de controles incluidos 1";
        $entretenimiento3->precio ="550";
        $entretenimiento3->stock = "1";  
        $entretenimiento3-> save();

    }
}
