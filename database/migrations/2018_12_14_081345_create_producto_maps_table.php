<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoMapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_maps', function (Blueprint $table) {
            $table->increments('id', true);
            $table->integer('marca_tiempo_actualizacion')->unsigned();
            $table->text('direccion', 65535);
            $table->float('latitud', 10, 0);
            $table->float('longitud', 10, 0);
            $table->integer('usuarios_id')->unsigned()->index('fk_tblMaps_tblUsuario1_idx');
            $table->integer('producto_id')->index('fk_tblMaps_tblProducto_idx');

            $table->foreign('usuarios_id', 'fk_tblMaps_tblUsuario1')->references('id')->on('usuarios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('producto_id', 'fk_tblMaps_tblProducto')->references('id')->on('productos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto_maps');
    }
}
