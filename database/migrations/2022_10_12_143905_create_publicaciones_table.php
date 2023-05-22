<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicaciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('publicacion_categoria_id');
            $table->string('titulo');
            $table->text('resumen')->nullable();
            $table->string('imagen');
            $table->longText('contenido');
            $table->tinyInteger('estado')->default(1);
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('publicacion_categoria_id')->references('id')->on('publicacion_categorias');
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
        Schema::dropIfExists('publicaciones');
    }
}
