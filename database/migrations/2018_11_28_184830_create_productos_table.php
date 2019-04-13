<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('productos', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('marca_tiempo_actualizacion')->unsigned();
			$table->integer('fecha_vencimiento')->unsigned()->nullable();
			$table->integer('fecha_inicio')->unsigned()->nullable();
			$table->float('maxima_inversion', 10, 0)->unsigned()->nullable();
			$table->float('minima_inversion', 10, 0)->unsigned()->nullable();
			$table->string('nombre', 45)->nullable();
			$table->text('descripcion', 65535)->nullable();
			$table->integer('maximo_inversionistas')->unsigned()->nullable();
			$table->integer('minimo_inversionistas')->unsigned()->nullable();
			$table->integer('estados_id')->unsigned()->index('fk_tblProducto_tblEstado1_idx');
			$table->integer('aliados_id')->unsigned()->index('fk_tblProducto_tblAliado1_idx');
			$table->integer('usuarios_id')->unsigned()->index('fk_tblProducto_tblUsuario1_idx');

			$table->foreign('aliados_id', 'fk_tblProducto_tblAliado1')->references('id')->on('aliados')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('estados_id', 'fk_tblProducto_tblEstado1')->references('id')->on('estados')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('usuarios_id', 'fk_tblProducto_tblUsuario1')->references('id')->on('usuarios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('productos');
	}

}
