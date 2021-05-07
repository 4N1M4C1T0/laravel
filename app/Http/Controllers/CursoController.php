<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function guardar(Request $data1){
        $curso = new Curso();
        $curso->nombre_curso = $data1["nombre_curso"];
        $curso->biografia_curso = $data1["biografia_curso"];
        $curso->precio = $data1["precio"];
        $curso->idusu = $data1["idusu"];
        $curso->save();
        return "Curso guardado";

    }

    public function mostrar(){
        $resultado = Curso::where("id",1)->get();
        return view("moscur",["resultado"=>$resultado]);
    }
}
