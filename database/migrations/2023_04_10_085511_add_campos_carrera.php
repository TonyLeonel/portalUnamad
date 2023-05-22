<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCamposCarrera extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('carreras', function(Blueprint $table) {
            $table->string('facebook')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('telefono')->nullable();
            $table->string('correo')->nullable();
            $table->string('direccion')->nullable();
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
        Schema::table('carreras', function (Blueprint $table) {
            $table->dropColumn('telefono');
            $table->dropColumn('correo');
            $table->dropColumn('direccion');
            $table->dropColumn('facebook');
            $table->dropColumn('whatsapp');
        });
    }
}
