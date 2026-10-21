<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    public function run(): void
    {
        $productos = [
            ['nombre' => 'Chipa', 'precio' => 5000],
            ['nombre' => 'Mbejú', 'precio' => 8000],
            ['nombre' => 'Cocido', 'precio' => 4000],
            ['nombre' => 'Empanada', 'precio' => 6000],
            ['nombre' => 'Sándwich', 'precio' => 10000],
        ];

        foreach ($productos as $producto) {
            Producto::updateOrCreate(
                ['nombre' => $producto['nombre']],
                ['precio' => $producto['precio']]
            );
        }
    }
}