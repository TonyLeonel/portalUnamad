<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMultipleColumnToCarreras extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
      Schema::table('carreras', function (Blueprint $table) {
         $table->after('abreviatura',function ($table){
            $table->text('resena')->nullable();
            $table->text('reglamentos')->nullable();
            $table->text('directivas')->nullable();
         });

         $table->after('perfil',function ($table){
            $table->text('campo')->nullable();
            $table->text('plan')->nullable();
            $table->text('areas')->nullable();
            $table->text('docentes')->nullable();
         });
      });
   }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::table('carreras', function (Blueprint $table) {
            $table->dropColumn([
                'resena',
                'reglamentos',
                'directivas',
                'campo',
                'plan',
                'areas',
                'docentes',
            ]);
        });
    }
}
