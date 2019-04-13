<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContenidoProductoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contenido_producto', function(Blueprint $table)
		{
			$table->integer('contenido_id')->unsigned()->index('fk_tblProducto_Imagen_tblImagen1_idx');
			$table->integer('producto_id')->index('fk_tblProducto_Imagen_tblProducto1_idx');

			$table->foreign('contenido_id', 'fk_tblProducto_Imagen_tblImagen1')->references('id')->on('contenidos')->onUpdate('NO ACTION')->onDelete('CASCADE');
			$table->foreign('producto_id', 'fk_tblProducto_Imagen_tblProducto1')->references('id')->on('productos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contenido_producto');
	}

}
