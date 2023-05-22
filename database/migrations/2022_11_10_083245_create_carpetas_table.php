<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarpetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carpetas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('carpeta_id')->nullable(); 
            $table->string('nombre');
            $table->text('alias')->nullable(); 
            $table->text('ubicacion');
            $table->tinyInteger('estado')->default(1);
            $table->timestamps();

            $table->foreign('carpeta_id')->references('id')->on('carpetas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carpetas');
    }
}
