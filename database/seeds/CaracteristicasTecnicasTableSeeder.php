<?php

use Illuminate\Database\Seeder;

class CaracteristicasTecnicasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('caracteristicas_tecnicas')->delete();
        
        \DB::table('caracteristicas_tecnicas')->insert(array (
            0 => 
            array (
                'id' => 7,
                'marca_tiempo_actualizacion' => 1545016715,
                'nombre' => 'Ventajas del Proyecto',
                'descripcion' => 'Proyecto ubicado en la llamada milla de oro de Cúcuta, la ciudad con mayor valorización en el sector inmobiliario en Colombia con un 7,22%.                              Su excelente ubicación permite el rápido acceso a muchos sitios de la ciudad. 
Catalogado en la Cúcuta como la construcción más rápida de la ciudad, dónde se realizaron 4 apartamentos en obra gris por día.                     
Este proyectos está conformado por 327 apartamentos .
Su valorización después de entrega es del 12%.
Está en Fase de construcción 1 etapa ; donde el inversionista de acuerdo a su fracción recibe una rentabilidad más rápida.',
                'visible' => 1,
                'orden' => 1,
                'producto_id' => 3,
                'usuarios_id' => 1,
            ),
            1 => 
            array (
                'id' => 8,
                'marca_tiempo_actualizacion' => 1545016764,
                'nombre' => 'Ventajas del Proyecto',
                'descripcion' => 'Proyecto con ubicación estratégica, puntos de fácil acceso a diferentes sectores de la ciudad. Centros comerciales, centros de recreación y deporte a menos de un kilómetro de distancia.                      Gracias a su ubicación en Cúcuta, la ciudad con mayor valorización en el sector inmobiliario en Colombia con un 7,22%.  La valorización de Praga Park  después de entrega es del 12%.                                       Este proyecto se encuentra en fase de adecuación, la cual es una fase de inversión temprana en la que el inversionista tendrá acceso a una rentabilidad más rápida.',
                'visible' => 1,
                'orden' => 1,
                'producto_id' => 4,
                'usuarios_id' => 1,
            ),
        ));
        
        
    }
}