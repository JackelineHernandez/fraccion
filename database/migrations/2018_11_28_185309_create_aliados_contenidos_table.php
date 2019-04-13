<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAliadosContenidosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('aliados_contenidos', function(Blueprint $table)
		{
			$table->integer('contenidos_id')->unsigned()->index('fk_tblImagen_Aliado_tblImagen1_idx');
			$table->integer('aliados_id')->unsigned()->index('fk_tblImagen_Aliado_tblAliado1_idx');

			$table->foreign('aliados_id', 'fk_tblImagen_Aliado_tblAliado1')->references('id')->on('aliados')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('contenidos_id', 'fk_tblImagen_Aliado_tblImagen1')->references('id')->on('contenidos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('aliados_contenidos');
	}

}
