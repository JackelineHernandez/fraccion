<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaracteristicasFinancierasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('caracteristicas_financieras', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('marca_tiempo_actualizacion')->unsigned();
			$table->float('rentabilidad_anual', 10, 0)->unsigned()->nullable();
			$table->float('rentabilidad_mensual', 10, 0)->unsigned()->nullable();
			$table->integer('plazo_meses')->unsigned()->nullable();
			$table->float('objetivo_financiacion', 10, 0)->unsigned()->nullable();
			$table->float('beneficio_operacion', 10, 0)->unsigned()->nullable();
			$table->integer('usuarios_id')->unsigned()->index('fk_tblCaracteristicaFinanciera_tblUsuario1_idx');
			$table->integer('producto_id')->index('fk_tblCaracteristicaFinanciera_tblProducto_idx');

			$table->foreign('usuarios_id', 'fk_tblCaracteristicaFinanciera_tblUsuario1')->references('id')->on('usuarios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('producto_id', 'fk_tblCaracteristicaFinanciera_tblProducto')->references('id')->on('productos')->onUpdate('NO ACTION')->onDelete('NO ACTION');

		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('caracteristicas_financieras');
	}

}
