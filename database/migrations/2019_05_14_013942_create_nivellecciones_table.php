<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNivelleccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nivellecciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('nivel_id');
            $table->unsignedBigInteger('leccion_id');
            $table->timestamps();

            $table->foreign('nivel_id')->references('id')->on('niveles')->onDelete('cascade');
            $table->foreign('leccion_id')->references('id')->on('lecciones')->onDelete('cascade');




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nivellecciones');
    }
}