<?php

use Illuminate\Database\Seeder;

class ProductosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('productos')->delete();
        
        \DB::table('productos')->insert(array (
            0 => 
            array (
                'id' => 3,
                'marca_tiempo_actualizacion' => 1546691614,
                'fecha_vencimiento' => 1644037200,
                'fecha_inicio' => 1546664400,
                'maxima_inversion' => 10000000.0,
                'minima_inversion' => 5000000.0,
                'nombre' => 'Silver Park',
                'descripcion' => 'Unico proyecto con aplicativo móvil para los propietarios, este proyecto cuenta con una ubicación estratégica en la ciudad, portería vigilada, Zona social con juegos infantiles, amplias zonas verdes con senderos peatonales, Piscina para adultos y niños con zona de baños; salón social, ascensores, planta eléctrica de emergencia, shut de basuras interno, zona de parqueos, Red de incendios y citofonía.',
                'maximo_inversionistas' => 40,
                'minimo_inversionistas' => 4,
                'estados_id' => 1,
                'aliados_id' => 1,
                'usuarios_id' => 1,
            ),
            1 => 
            array (
                'id' => 4,
                'marca_tiempo_actualizacion' => 1546696891,
                'fecha_vencimiento' => 1630818000,
                'fecha_inicio' => 1546664400,
                'maxima_inversion' => 10000000.0,
                'minima_inversion' => 5000000.0,
                'nombre' => 'Praga Park',
                'descripcion' => 'Primera Megatorre Bioclimática de la ciudad que contará con amplias zonas verdes, zonas de lectura, zona social cubierta, piscina para niños y adultos, gimnasio dotado, zonas infantiles, zona de masajes y terraza mirador con zona de BBQ. Con apartamentos desde 69.94m2 hasta 67.85 m2.',
                'maximo_inversionistas' => 50,
                'minimo_inversionistas' => 5,
                'estados_id' => 1,
                'aliados_id' => 1,
                'usuarios_id' => 1,
            ),
        ));
        
        
    }
}