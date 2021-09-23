<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $arrayArticulos = array(
            array('descripcion' => 'Lararopas Wirphool', 'precio' => 50000, 'stock' => 100),
            array('descripcion' => 'Lavaropas Drean', 'precio' => 55000, 'stock' => 15),
            array('descripcion' => 'Cocina Volcán', 'precio' => 25000, 'stock' => 8),
            array('descripcion' => 'Cafetera Sensei', 'precio' => 8000, 'stock' => 25),
        );

        foreach ($arrayArticulos as $articulo)
        {
            DB::table('articulos')->insert([
                'descripcion' => $articulo['descripcion'],
                'precio' => $articulo['precio'],
                'stock' => $articulo['stock'],
            ]);
        }
    }
}
