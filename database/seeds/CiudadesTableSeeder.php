<?php

use Illuminate\Database\Seeder;

class CiudadesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ciudades')->delete();
        
        \DB::table('ciudades')->insert(array (
            0 => 
            array (
                'id' => 1,
                'marca_tiempo_actualizacion' => 1543309200,
                'codigo' => '54001',
                'nombre' => 'Cúcuta',
                'departamento' => 'Norte de Santander',
                'usuarios_id' => 1,
            ),
        ));
        
        
    }
}