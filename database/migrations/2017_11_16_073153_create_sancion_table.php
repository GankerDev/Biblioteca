<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSancionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sancion', function (Blueprint $table) {
            $table->increments('id_sancion');
            $table->string('descripcion');
            $table->integer('id_tipo_sancion')->unsigned();

            //foreign key
            $table->foreign('id_tipo_sancion')->references('id_tipo_sancion')->on('tipo_sancion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sancion');
    }
}
