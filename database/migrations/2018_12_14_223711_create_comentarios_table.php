<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->increments('id', true);
            $table->string('titulo', 45);
            $table->text('cuerpo', 65535);
            $table->integer('fecha_creacion')->unsigned();
            $table->integer('usuario_id')->unsigned()->index('fk_tblComentarios_tblUsuarios_idx');
            $table->integer('articulo_id')->unsigned()->index('fk_tblComentarios_tblArticulos_idx');

            $table->foreign('usuario_id', 'fk_tblComentarios_tblUsuarios')->references('id')->on('usuarios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('articulo_id', 'fk_tblComentarios_tblArticulos')->references('id')->on('articulos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comentarios');
    }
}
