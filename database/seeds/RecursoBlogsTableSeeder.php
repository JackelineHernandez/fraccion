<?php

use Illuminate\Database\Seeder;

class RecursoBlogsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('recurso_blogs')->delete();
        
        \DB::table('recurso_blogs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nombre' => 'noticia1.png',
                'ruta' => 'images/blog/noticia1.png',
                'fecha_creacion' => 1545005725,
                'posicion' => 1,
                'articulo_id' => 1,
                'usuario_id' => 1,
                'tipo_recurso_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'nombre' => 'noticia2.png',
                'ruta' => 'images/blog/noticia2.png',
                'fecha_creacion' => 1545005725,
                'posicion' => 2,
                'articulo_id' => 2,
                'usuario_id' => 1,
                'tipo_recurso_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'nombre' => 'noticia3.png',
                'ruta' => 'images/blog/noticia3.png',
                'fecha_creacion' => 1545005725,
                'posicion' => 1,
                'articulo_id' => 3,
                'usuario_id' => 1,
                'tipo_recurso_id' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'nombre' => 'noticia4.png',
                'ruta' => 'images/blog/noticia4.png',
                'fecha_creacion' => 1545005725,
                'posicion' => 1,
                'articulo_id' => 4,
                'usuario_id' => 1,
                'tipo_recurso_id' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'nombre' => 'noticia5.png',
                'ruta' => 'images/blog/noticia5.png',
                'fecha_creacion' => 1545005725,
                'posicion' => 1,
                'articulo_id' => 5,
                'usuario_id' => 1,
                'tipo_recurso_id' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'nombre' => 'noticia6.png',
                'ruta' => 'images/blog/noticia6.png',
                'fecha_creacion' => 1545005725,
                'posicion' => 1,
                'articulo_id' => 6,
                'usuario_id' => 1,
                'tipo_recurso_id' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'nombre' => 'noticia61.png',
                'ruta' => 'images/blog/noticia61.png',
                'fecha_creacion' => 1545005725,
                'posicion' => 2,
                'articulo_id' => 6,
                'usuario_id' => 1,
                'tipo_recurso_id' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'nombre' => 'noticia62.png',
                'ruta' => 'images/blog/noticia62.png',
                'fecha_creacion' => 1545005725,
                'posicion' => 3,
                'articulo_id' => 6,
                'usuario_id' => 1,
                'tipo_recurso_id' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'nombre' => 'noticia63.png',
                'ruta' => 'images/blog/noticia63.png',
                'fecha_creacion' => 1545005725,
                'posicion' => 4,
                'articulo_id' => 6,
                'usuario_id' => 1,
                'tipo_recurso_id' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'nombre' => 'noticia1.png',
                'ruta' => 'images/blog/noticia1.png',
                'fecha_creacion' => 1545005725,
                'posicion' => 1,
                'articulo_id' => 7,
                'usuario_id' => 1,
                'tipo_recurso_id' => 1,
            ),
            10 => 
            array (
                'id' => 14,
                'nombre' => '2video1.mp4',
                'ruta' => 'videos/blog/video1.mp4',
                'fecha_creacion' => 1545085066,
                'posicion' => 1,
                'articulo_id' => 2,
                'usuario_id' => 1,
                'tipo_recurso_id' => 2,
            ),
        ));
        
        
    }
}