<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('id_usuario');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('password');
            $table->integer('id_tipo')->unsigned();
            $table->integer('id_sancion')->unsigned();
            $table->timestamps();

            //foreign keys
            $table->foreign('id_tipo')->references('id_tipo_usuario')->on('tipo');
            $table->foreign('id_sancion')->references('id_sancion')->on('sancion');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
