<?php

use Illuminate\Database\Seeder;

class TipoRecursosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tipo_recursos')->delete();
        
        \DB::table('tipo_recursos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nombre' => 'Fotografia',
            ),
            1 => 
            array (
                'id' => 2,
                'nombre' => 'Video',
            ),
        ));
        
        
    }
}