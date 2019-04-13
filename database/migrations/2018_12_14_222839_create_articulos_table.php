<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->increments('id', true);
            $table->string('titulo', 45);
            $table->integer('fecha_creacion')->unsigned();
            $table->boolean('estado')->default('0');
            $table->string('descripcion', 300)->nullable();
            $table->text('cuerpo', 65535);
            $table->integer('categoria_blog_id')->unsigned()->index('fk_tblArticulos_tblCategoriaBlogs_idx');

            $table->foreign('categoria_blog_id', 'fk_tblArticulos_tblCategoriaBlogs')->references('id')->on('categoria_blogs')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulos');
    }
}
