<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaginasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paginas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pagina_categoria_id');
            $table->string('flag')->nullable();
            $table->string('titulo');
            $table->tinyInteger('block')->default(0);
            $table->string('fondo')->nullable();
            $table->longText('contenido');
            $table->tinyInteger('estado')->default(1);
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('pagina_categoria_id')->references('id')->on('pagina_categorias');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paginas');
    }
}
