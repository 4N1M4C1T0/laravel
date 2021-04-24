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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id("idcurso");
            $table->string("nombre_curso",40);
            $table->string("biografia_curso",1000);
            $table->decimal("precio",10,2);
        });

        Schema::table('cursos', function (Blueprint $table){
            $table->unsignedBigInteger("idusu");
            $table->foreign("idusu")->references("idusu")->on("usuarios");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
