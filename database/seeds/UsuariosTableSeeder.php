<?php

use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('usuarios')->delete();
        
        \DB::table('usuarios')->insert(array (
            0 => 
            array (
                'id' => 1,
                'marca_tiempo_actualizacion' => 1543309200,
                'nombre' => 'root',
                'contrasena' => '.Fraccion*2018',
                'nombre_usuario' => 'root',
                'desactivado' => 0,
                'usuarios_id' => 1,
            ),
        ));
        
        
    }
}