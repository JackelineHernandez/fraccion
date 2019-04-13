<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('marca_tiempo_actualizacion')->unsigned();
			$table->string('nombre', 45)->nullable();
			$table->string('apellido', 45)->nullable();
			$table->string('direccion', 150)->nullable();
			$table->string('correo', 50)->nullable();
			$table->string('telefono', 20)->nullable();
			$table->string('identificacion', 20)->nullable();
			$table->string('celular', 20)->nullable();
			$table->string('ocupacion', 45)->nullable();
			$table->string('contrasena')->nullable();
			$table->integer('fecha_nacimiento');
			$table->integer('hijos')->unsigned()->nullable();
			$table->integer('personas_a_cargo')->unsigned()->nullable();
			$table->integer('tipos_identificaciones_id')->unsigned()->nullable()->index('fk_tblPersona_tblTipoIdentificacion1_idx');
			$table->integer('ciudades_id')->unsigned()->nullable()->index('fk_tblPersona_tblCiudad1_idx');
			$table->integer('usuarios_id')->unsigned()->nullable()->index('fk_tblPersona_tblUsuario1_idx');
			$table->integer('personas_referido_id')->unsigned()->nullable()->index('fk_tblPersona_tblPersona1_idx');
			$table->integer('generos_id')->unsigned()->nullable()->index('fk_tblPersona_tblGenero1_idx');
			$table->integer('tipos_personas_id')->unsigned()->nullable()->index('fk_personas_tipos_personas1_idx');

			$table->foreign('tipos_personas_id', 'fk_personas_tipos_personas1')->references('id')->on('tipos_personas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('ciudades_id', 'fk_tblPersona_tblCiudad1')->references('id')->on('ciudades')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('generos_id', 'fk_tblPersona_tblGenero1')->references('id')->on('generos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('personas_referido_id', 'fk_tblPersona_tblPersona1')->references('id')->on('personas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('tipos_identificaciones_id', 'fk_tblPersona_tblTipoIdentificacion1')->references('id')->on('tipos_identificaciones')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('usuarios_id', 'fk_tblPersona_tblUsuario1')->references('id')->on('usuarios')->onUpdate('NO ACTION')->onDelete('NO ACTION');

		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('personas');
	}

}
