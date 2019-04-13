<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('marca_tiempo_actualizacion')->unsigned();
			$table->string('nombre', 45)->nullable();
			$table->string('contrasena')->nullable();
			$table->string('nombre_usuario', 45)->nullable();
			$table->boolean('desactivado')->nullable();
			$table->integer('usuarios_id')->unsigned()->index('fk_tblUsuario_tblUsuario1_idx');

			$table->foreign('usuarios_id', 'fk_tblUsuario_tblUsuario1')->references('id')->on('usuarios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usuarios');
	}

}
