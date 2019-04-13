<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecursoBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recurso_blogs', function (Blueprint $table) {
            $table->increments('id', true);
            $table->string('nombre', 300);
            $table->string('ruta', 500);
            $table->integer('fecha_creacion')->unsigned();
            $table->integer('posicion')->unsigned();
            $table->integer('articulo_id')->unsigned()->index('fk_tblRecursoBlogs_tblArticulos_idx');
            $table->integer('usuario_id')->unsigned()->index('fk_tblRecursoBlogs_tblUsuarios_idx');
            $table->integer('tipo_recurso_id')->unsigned()->index('fk_tblRecursoBlogs_tblTipoRecursos_idx');

            $table->foreign('articulo_id', 'fk_tblRecursoBlogs_tblArticulos')->references('id')->on('articulos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('usuario_id', 'fk_tblRecursoBlogs_tblUsuarios')->references('id')->on('usuarios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('tipo_recurso_id', 'fk_tblRecursoBlogs_tblTipoRecursos')->references('id')->on('tipo_recursos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recurso_blogs');
    }
}
