<?php

use Illuminate\Database\Seeder;

class TiposIdentificacionesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tipos_identificaciones')->delete();
        
        \DB::table('tipos_identificaciones')->insert(array (
            0 => 
            array (
                'id' => 1,
                'marca_tiempo_actualizacion' => 1543309200,
                'nombre' => 'Cédula Ciudadania',
                'nombre_recortado' => 'CC',
                'url' => NULL,
                'usuarios_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'marca_tiempo_actualizacion' => 1543309200,
                'nombre' => 'Pasaporte',
                'nombre_recortado' => 'PP',
                'url' => NULL,
                'usuarios_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'marca_tiempo_actualizacion' => 1543309200,
                'nombre' => 'Cédula extranjería',
                'nombre_recortado' => 'CE',
                'url' => NULL,
                'usuarios_id' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'marca_tiempo_actualizacion' => 1543309200,
                'nombre' => 'NIT',
                'nombre_recortado' => 'NN',
                'url' => NULL,
                'usuarios_id' => 1,
            ),
        ));
        
        
    }
}