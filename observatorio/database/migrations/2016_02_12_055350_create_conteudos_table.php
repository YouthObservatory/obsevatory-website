    <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConteudosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conteudos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('publicacao_id')->unsigned()->nullable();
            $table->string('titulo', 100);
            $table->string('olho', 200);
            $table->longText('texto');
            $table->integer('idioma_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('conteudos', function (Blueprint $table) {
            $table->foreign('publicacao_id')->references('id')->on('publicacoes')->onDelete('cascade');
            $table->foreign('idioma_id')->references('id')->on('idiomas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conteudos');
    }
}
