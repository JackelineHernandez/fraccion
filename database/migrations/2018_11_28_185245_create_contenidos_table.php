<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContenidosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contenidos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('marca_tiempo_actualizacion')->unsigned();
			$table->string('ubicacion', 100)->nullable();
			$table->string('nombre_archivo', 100)->nullable();
			$table->string('extension', 45)->nullable();
			$table->float('tamanio', 10, 0)->nullable();
			$table->integer('usuarios_id')->unsigned()->index('fk_tblImagen_tblUsuario1_idx');
			$table->integer('tipo_contenidos_id')->unsigned()->index('fk_contenidos_tipo_contenidos1_idx');

			$table->foreign('tipo_contenidos_id', 'fk_contenidos_tipo_contenidos1')->references('id')->on('tipo_contenidos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('usuarios_id', 'fk_tblImagen_tblUsuario1')->references('id')->on('usuarios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contenidos');
	}

}
