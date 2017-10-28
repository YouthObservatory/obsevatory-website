<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('autor_id')->unsigned();
            $table->dateTime('data_inicio');
            $table->dateTime('data_fim');
            $table->string('titulo', 128);
            $table->string('pais_sigla', 2)->nullable();
            $table->string('localizacao', 512)->nullable();
            $table->string('url', 512)->nullable();
            $table->float('lat')->nullable();
            $table->float('long')->nullable();
            $table->TinyInteger('online')->default(1);
            $table->timestamps();
        });

        Schema::table('eventos', function (Blueprint $table) {
            $table->foreign('autor_id')->references('id')->on('usuarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
}
