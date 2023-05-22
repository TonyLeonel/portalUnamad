<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComunicadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comunicados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('comunicado_categoria_id');
            $table->string('titulo');
            $table->string('imagen');
            $table->longText('contenido')->nullable();
            $table->integer('duracion')->nullable();
            $table->dateTime('fecha_fin')->nullable();
            $table->tinyInteger('estado')->default(1);
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('comunicado_categoria_id')->references('id')->on('comunicado_categorias');
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
        Schema::dropIfExists('comunicados');
    }
}
