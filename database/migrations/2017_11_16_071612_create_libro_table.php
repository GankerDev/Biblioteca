<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libro', function (Blueprint $table) {
            $table->increments('id_libro');
            $table->integer('cod_libro');
            $table->string('nombre_libro');
            $table->string('idioma');
            $table->integer('codigo_ISBN');
            $table->string('portada');
            $table->string('descripcion');
            $table->string('contenido_extra');
            $table->integer('id_editorial')->unsigned();
            $table->integer('id_autor')->unsigned();
            $table->integer('id_categoria')->unsigned();
            $table->integer('id_lugar')->unsigned();
            $table->timestamps();

            //foreign keys
            $table->foreign('id_editorial')->references('id_editorial')->on('editorial');
            $table->foreign('id_autor')->references('id_autor')->on('autor');
            $table->foreign('id_categoria')->references('id_categoria')->on('categoria');
            $table->foreign('id_lugar')->references('id_lugar')->on('lugar');    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libro');
    }
}
