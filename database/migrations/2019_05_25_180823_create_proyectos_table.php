<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_pro',100);
            $table->integer('monto');
            $table->string('fechai',100);
            $table->string('fechaf',100);
            $table->string('recursos',100);
            $table->string('plan',100);
            $table->integer('semaforo');
            $table->integer('avance');
            $table->string('desviaciones',100);
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
        Schema::dropIfExists('proyectos');
    }
}
