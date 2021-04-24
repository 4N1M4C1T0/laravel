<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_cursos', function (Blueprint $table) {
            $table->id("idcurso");
            $table->integer("idusu");
            $table->string("nombre_curso",40);
            $table->string("biografia_curso",1000);
            $table->decimal("precio",10,2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_cursos');
    }
}
