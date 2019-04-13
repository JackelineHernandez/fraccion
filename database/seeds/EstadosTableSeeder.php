<?php

use Illuminate\Database\Seeder;

class EstadosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('estados')->delete();
        
        \DB::table('estados')->insert(array (
            0 => 
            array (
                'id' => 1,
                'marca_tiempo_actualizacion' => 1543309200,
                'estado' => 'Activo',
                'usuarios_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'marca_tiempo_actualizacion' => 1543309200,
                'estado' => 'Inactivo',
                'usuarios_id' => 1,
            ),
        ));
        
        
    }
}