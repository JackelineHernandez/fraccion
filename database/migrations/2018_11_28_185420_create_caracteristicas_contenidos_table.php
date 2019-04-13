<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaracteristicasContenidosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('caracteristicas_contenidos', function(Blueprint $table)
		{
			$table->integer('caracteristicas_tecnica_id')->unsigned()->index('fk_tblCaracteristica_Imagen_tblCaracteristicaTecnica1_idx');
			$table->integer('contenido_id')->unsigned()->index('fk_tblCaracteristica_Imagen_tblImagen1_idx');

			$table->foreign('caracteristicas_tecnica_id', 'fk_tblCaracteristica_Imagen_tblCaracteristicaTecnica1')->references('id')->on('caracteristicas_tecnicas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('contenido_id', 'fk_tblCaracteristica_Imagen_tblImagen1')->references('id')->on('contenidos')->onUpdate('NO ACTION')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('caracteristicas_contenidos');
	}

}
