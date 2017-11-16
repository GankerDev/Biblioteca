<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEjemplarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ejemplar', function (Blueprint $table) {
            $table->increments('id_ejemplar');
            $table->string('edicion');
            $table->string('ubicacion');
            $table->string('estado');
            $table->date('fecha_alta');
            $table->date('fecha_baja');
            $table->timestamps();
            $table->integer('id_libro')->unsigned();
            $table->integer('id_prestable')->unsigned();

            //foreign keys
            $table->foreign('id_libro')->references('id_libro')->on('libro');
            $table->foreign('id_prestable')->references('id_prestable')->on('prestable');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ejemplar');
    }
}
