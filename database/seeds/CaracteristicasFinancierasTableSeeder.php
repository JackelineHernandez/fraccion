<?php

use Illuminate\Database\Seeder;

class CaracteristicasFinancierasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('caracteristicas_financieras')->delete();
        
        \DB::table('caracteristicas_financieras')->insert(array (
            0 => 
            array (
                'id' => 3,
                'marca_tiempo_actualizacion' => 1546691614,
                'rentabilidad_anual' => 7.2,
                'rentabilidad_mensual' => 4.7,
                'plazo_meses' => 32,
                'objetivo_financiacion' => 10.0,
                'beneficio_operacion' => 10.0,
                'usuarios_id' => 1,
                'producto_id' => 3,
            ),
            1 => 
            array (
                'id' => 4,
                'marca_tiempo_actualizacion' => 1546696912,
                'rentabilidad_anual' => 7.22,
                'rentabilidad_mensual' => 4.5,
                'plazo_meses' => 32,
                'objetivo_financiacion' => 10.0,
                'beneficio_operacion' => 10.0,
                'usuarios_id' => 1,
                'producto_id' => 4,
            ),
        ));
        
        
    }
}