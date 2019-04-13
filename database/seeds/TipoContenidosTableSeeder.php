<?php

use Illuminate\Database\Seeder;

class TipoContenidosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tipo_contenidos')->delete();

        \DB::table('tipo_contenidos')->insert(array (
            0 =>
            array (
                'id' => 1,
                'marca_tiempo_actualizacion' => 1543309200,
                'nombre' => 'Imagen',
                'usuarios_id' => 1,
            ),
            1 =>
            array (
                'id' => 2,
                'marca_tiempo_actualizacion' => 1543309200,
                'nombre' => 'Video',
                'usuarios_id' => 1,
            ),
        ));


    }
}
