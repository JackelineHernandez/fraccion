<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAliadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('aliados', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('marca_tiempo_actualizacion')->unsigned();
			$table->string('nombre', 45)->nullable();
			$table->string('identificacion', 20)->nullable();
			$table->string('telefono', 45)->nullable();
			$table->string('direccion', 250)->nullable();
			$table->integer('ciudades_id')->unsigned()->index('fk_tblAliado_tblCiudad1_idx');
			$table->integer('tipos_identificaciones_id')->unsigned()->index('fk_tblAliado_tblTipoIdentificacion1_idx');
			$table->integer('usuarios_id')->unsigned()->index('fk_tblAliado_tblUsuario1_idx');

			$table->foreign('ciudades_id', 'fk_tblAliado_tblCiudad1')->references('id')->on('ciudades')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('tipos_identificaciones_id', 'fk_tblAliado_tblTipoIdentificacion1')->references('id')->on('tipos_identificaciones')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('usuarios_id', 'fk_tblAliado_tblUsuario1')->references('id')->on('usuarios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('aliados');
	}

}
