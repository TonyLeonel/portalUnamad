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
            $table->string('nombre'); // 'carrera'
            $table->text('abreviatura')->nullable();
            $table->text('vision')->nullable(); // 'carrera_vision'
            $table->text('mision')->nullable(); // 'carrera_vision'
            $table->text('objetivo')->nullable();
            $table->text('perfil')->nullable(); // 'perfil'
            $table->string('imagen')->nullable();
            $table->text('malla')->nullable(); // 'malla'
            $table->text('descripcion')->nullable();
            $table->unsignedBigInteger('facultad_id');

            $table->foreign('facultad_id')->references('id')->on('facultades');
            $table->timestamps();

                
                // 'resena'
                // 'reglamentos'
                // 'directivas'
                // 'campo'
                // 'plan'
                // 'areas'
                // 'objetivos'

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
