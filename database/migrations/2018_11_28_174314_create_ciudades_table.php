<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCiudadesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ciudades', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('marca_tiempo_actualizacion')->unsigned();
			$table->string('codigo', 10)->nullable();
			$table->string('nombre', 100)->nullable();
			$table->string('departamento', 100)->nullable();
			$table->integer('usuarios_id')->unsigned()->index('fk_tblCiudad_tblUsuario1_idx');

			$table->foreign('usuarios_id', 'fk_tblCiudad_tblUsuario1')->references('id')->on('usuarios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ciudades');
	}

}
