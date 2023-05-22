<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarrerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carreras', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('abreviatura')->nullable();
            $table->text('vision')->nullable();
            $table->text('mision')->nullable();
            $table->text('objetivo')->nullable();
            $table->text('perfil')->nullable();
            $table->string('imagen')->nullable();
            $table->text('malla')->nullable();
            $table->text('descripcion')->nullable();
            $table->unsignedBigInteger('facultad_id');

            $table->foreign('facultad_id')->references('id')->on('facultades');
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
        Schema::dropIfExists('carreras');
    }
}
