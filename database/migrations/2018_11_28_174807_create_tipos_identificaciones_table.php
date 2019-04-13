<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTiposIdentificacionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tipos_identificaciones', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('marca_tiempo_actualizacion')->unsigned();
			$table->string('nombre', 45)->nullable();
			$table->string('nombre_recortado', 2)->nullable();
			$table->string('url', 250)->nullable();
			$table->integer('usuarios_id')->unsigned()->index('fk_tblTipoIdentificacion_tblUsuario1_idx');

			$table->foreign('usuarios_id', 'fk_tblTipoIdentificacion_tblUsuario1')->references('id')->on('usuarios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tipos_identificaciones');
	}

}
