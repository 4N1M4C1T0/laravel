<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_usuarios', function (Blueprint $table) {
            $table->id("idusu");
            $table->string("tipo_usu", 80);
            $table->string("nombre_usu", 40);
            $table->string("correo", 100);
            $table->string("contrasenia",100);
            $table->int("dni");
            $table->string("direccion",200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_usuarios');
    }
}
