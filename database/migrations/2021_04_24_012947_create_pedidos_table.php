<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id("idped");
            $table->decimal("importe_total",10,2);
        });

        Schema::table('pedidos', function (Blueprint $table){
            $table->unsignedBigInteger("idcurso");
            $table->unsignedBigInteger("idusu");
            $table->foreign("idcurso")->references("idcurso")->on("cursos");
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
        Schema::dropIfExists('pedidos');
    }
}
