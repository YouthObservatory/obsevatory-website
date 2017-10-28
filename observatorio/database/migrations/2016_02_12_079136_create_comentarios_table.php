<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComentariosTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->integer('publicacao_id')->unsigned();
            $table->text('texto');
            $table->integer('parent_id')->unsigned()->nullable();
            $table->timestamps();
        });

        Schema::table('comentarios', function (Blueprint $table) {
            $table->foreign('usuario_id')->references('id')->on('usuarios')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('publicacao_id')->references('id')->on('publicacoes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('parent_id')->references('id')->on('comentarios')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        Schema::create('comentarios_upvotes', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('comentario_id')->unsigned();
            $table->integer('usuario_id')->unsigned();
        });

        Schema::table('comentarios_upvotes', function (Blueprint $table) {
           $table->foreign('comentario_id')->references('id')->on('comentarios')
               ->onUpdate('cascade')
               ->onDelete('cascade');
           $table->foreign('usuario_id')->references('id')->on('usuarios')
               ->onUpdate('cascade')
               ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
//        Schema::table('comentarios', function (Blueprint $table) {
//            $table->dropForeign('usuario_id_');
//        });
        Schema::dropIfExists('comentarios_upvotes');
        Schema::dropIfExists('comentarios');
    }
}
