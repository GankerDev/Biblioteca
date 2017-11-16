<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestamoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamo', function (Blueprint $table) {
            $table->increments('id_prestamo');
            $table->timestamp('fecha_prestamo');
            $table->date('fecha_devolucion');
            $table->string('contenido_prestamo');
            $table->integer('cantidad_dias');
            $table->integer('id_tipo_usuario')->unsigned();
            $table->integer('id_ejemplar')->unsigned();
            $table->integer('id_libro')->unsigned();
            $table->integer('id_estado_prestamo')->unsigned();
            $table->timestamps();

            //foreign keys
            $table->foreign('id_tipo_usuario')->references('id_tipo')->on('usuario');
            $table->foreign('id_ejemplar')->references('id_ejemplar')->on('ejemplar');
            $table->foreign('id_libro')->references('id_libro')->on('libro');
            $table->foreign('id_estado_prestamo')->references('id_estado_prestamo')->on('estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestamo');
    }
}
