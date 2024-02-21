<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Electronicos;
use Illuminate\Database\Seeder;

class ElectronicosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $electronico = new Electronicos();
        $electronico->marca = "Samsung";
        $electronico->nombre = "Smartphone SAMSUNG Galaxy A05S 6.7 8GB 128GB 50MP + 2MP + 2MP Black";
        $electronico->caracteristicas =" Pantalla: 6.7 Memoria RAM: 4GB Memoria interna:64GB";
        $electronico->precio ="379";
        $electronico->stock = "30";  
        $electronico-> save();

        $electronico2 = new Electronicos();
        $electronico2->marca ="XIAOMI";
        $electronico2->nombre = "Smartphone XIAOMI Redmi Note 13 Pro 6.67 8GB 256GB 200MP + W8 + M2 Negro";
        $electronico2->caracteristicas ="Pantalla:6.67 Memoria RAM:8GB Memoria interna:256GB";
        $electronico2->precio ="1299";
        $electronico2->stock = "20";  
        $electronico2-> save();

        $electronico3 = new Electronicos();
        $electronico3->marca ="Motorola";
        $electronico3->nombre = "Smartphone MOTOROLA EDGE 30 Neo 6.3 8GB 128GB 64MP+13MP Morado";
        $electronico3->caracteristicas =" Pantalla: 6.3 Memoria RAM: 8GB Memoria interna:128GB";
        $electronico3->precio ="829";
        $electronico3->stock = "30";  
        $electronico3-> save();

        $electronico4 = new Electronicos();
        $electronico4->marca="ASUS VIVOBOOK";
        $electronico4->nombre = "LAPTOP ASUS VIVOBOOK";
        $electronico4->caracteristicas =" 15X K3504ZA-NJ135W INTEL CORE I5 12VA GEN 10-CORE 8GB 512GB SSD";
        $electronico4->precio ="1799";
        $electronico4->stock = "50";  
        $electronico4-> save();

        $electronico5 = new Electronicos();
        $electronico5->marca = "RUK";
        $electronico5->nombre = "PARLANTE LIT MOTION2";
        $electronico5->caracteristicas ="BLUETOOTH";
        $electronico5->precio ="469";
        $electronico5->stock = "30";  
        $electronico5-> save(); 
    }
}
