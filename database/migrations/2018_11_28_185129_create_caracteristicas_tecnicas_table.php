<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaracteristicasTecnicasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('caracteristicas_tecnicas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('marca_tiempo_actualizacion')->unsigned();
			$table->string('nombre', 45)->nullable();
			$table->text('descripcion', 65535)->nullable();
			$table->boolean('visible')->nullable();
			$table->integer('orden')->nullable();
			$table->integer('producto_id')->index('fk_tblCaracteristicasTecnicas_tblProducto1_idx');
			$table->integer('usuarios_id')->unsigned()->index('fk_tblCaracteristicaTecnica_tblUsuario1_idx');

			$table->foreign('usuarios_id', 'fk_tblCaracteristicaTecnica_tblUsuario1')->references('id')->on('usuarios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('producto_id', 'fk_tblCaracteristicasTecnicas_tblProducto1')->references('id')->on('productos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('caracteristicas_tecnicas');
	}

}
