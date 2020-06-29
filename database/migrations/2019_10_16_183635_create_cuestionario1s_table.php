<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuestionario1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuestionario1s', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('p1');
            $table->integer('p2');
            $table->integer('p3');
            $table->integer('p4');
            $table->integer('p5');
            $table->integer('p6');
            $table->integer('p7');
            $table->integer('p8');
            $table->integer('p9');
            $table->integer('p10');
            $table->integer('p11');
            $table->integer('p12');
            $table->integer('p13');
            $table->integer('p14');
            $table->integer('p15');
            $table->integer('p16');
            $table->integer('p17');
            $table->integer('p18');
            $table->integer('p19');
            $table->integer('p20');
            $table->integer('id_user_resol');
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
        Schema::dropIfExists('cuestionario1s');
    }
}
