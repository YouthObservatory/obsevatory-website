<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('email', 254)->unique();
            $table->date('nascimento');
            $table->string('bio', 140);
            $table->tinyInteger('sexo')->unsigned();
            $table->string('password', 60);
            $table->rememberToken();
            $table->timestamps();
            $table->integer('role_id')->unsigned();
            $table->binary('foto')->nullable();
            $table->string('username', 25)->unique();
        });

        Schema::table('usuarios', function (Blueprint $table) {
            $table->foreign('role_id')->references('id')->on('roles')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.usuarios
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
