<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCamposPaginaCategoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('pagina_categorias', function(Blueprint $table) {
            $table->unsignedBigInteger('menu_id')->nullable();
            $table->unsignedBigInteger('pagina_categorias_id')->nullable();
            $table->tinyInteger('posicion')->nullable();;
            $table->string('flag')->nullable();
            $table->tinyInteger('tipo')->nullable();
            $table->tinyInteger('fuente')->nullable();
            $table->string('telefono')->nullable();
            $table->string('correo')->nullable();
            $table->string('direccion')->nullable();
            $table->string('facebook')->nullable();
            $table->string('whatsapp')->nullable();

            $table->foreign('menu_id')->references('id')->on('menus');
            $table->foreign('pagina_categorias_id')->references('id')->on('pagina_categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('pagina_categorias', function (Blueprint $table) {
            $table->unsignedBigInteger('menu_id')->nullable();
            $table->unsignedBigInteger('pagina_categorias_id')->nullable();
            $table->tinyInteger('posicion')->nullable();;
            $table->string('flag')->nullable();
            $table->tinyInteger('tipo')->nullable();
            $table->tinyInteger('fuente')->nullable();
            $table->string('telefono')->nullable();
            $table->string('correo')->nullable();
            $table->string('direccion')->nullable();
            $table->string('facebook')->nullable();
            $table->string('whatsapp')->nullable();
        });
    }
}