<?php

use Illuminate\Database\Seeder;

class CategoriaBlogsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categoria_blogs')->delete();
        
        \DB::table('categoria_blogs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'descripcion' => 'Formacion',
                'activo' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'descripcion' => 'Educativo',
                'activo' => 1,
            ),
        ));
        
        
    }
}