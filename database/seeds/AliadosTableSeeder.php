<?php

use Illuminate\Database\Seeder;

class AliadosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('aliados')->delete();
        
        \DB::table('aliados')->insert(array (
            0 => 
            array (
                'id' => 1,
                'marca_tiempo_actualizacion' => 1543309200,
                'nombre' => 'Celeus Group',
                'identificacion' => '123456',
                'telefono' => '3333333',
                'direccion' => 'Cll 13 a # 1E-87 Barrio Caobos',
                'ciudades_id' => 1,
                'tipos_identificaciones_id' => 4,
                'usuarios_id' => 1,
            ),
        ));
        
        
    }
}