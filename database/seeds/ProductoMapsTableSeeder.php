<?php

use Illuminate\Database\Seeder;

class ProductoMapsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('producto_maps')->delete();
        
        \DB::table('producto_maps')->insert(array (
            0 => 
            array (
                'id' => 3,
                'marca_tiempo_actualizacion' => 1543309200,
                'direccion' => 'San Mateo, Local CM-4, Cúcuta, Norte de Santander, Colombia',
                'latitud' => 7.881349,
                'longitud' => -72.487359,
                'usuarios_id' => 1,
                'producto_id' => 3,
            ),
            1 => 
            array (
                'id' => 4,
                'marca_tiempo_actualizacion' => 1543309200,
                'direccion' => 'Av. 3 Este, Cúcuta, Norte de Santander, Colombia',
                'latitud' => 7.88888,
                'longitud' => -72.493183,
                'usuarios_id' => 1,
                'producto_id' => 4,
            ),
        ));
        
        
    }
}