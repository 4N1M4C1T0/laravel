<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function guardar(Request $data1){
        $data1->validate(
            ['nombre_curso' => 'required',
                'biografia_curso'=> 'required',
                'precio' => 'required',
                'idusu' => 'required']
        );
        $curso = new Curso();
        $curso->nombre_curso = $data1["nombre_curso"];
        $curso->biografia_curso = $data1["biografia_curso"];
        $curso->precio = $data1["precio"];
        $curso->idusu = $data1["idusu"];
        $curso->save();
        return "Curso guardado";

    }

    public function mostrar(){
        $resultado = Curso::all();
        return view("moscur",["resultado"=>$resultado]);
    }

    public function mostrarCur(int $id)
    {
        $resultado = Curso::where("id", $id)->first();
        return view("actcur", ["resultado" => $resultado]);
    }

    public function actualizar(Request $request)
    {
        $request->validate(
            ['nombre_curso' => 'required',
                'biografia_curso'=> 'required',
                'precio' => 'required',
                'idusu' => 'required']
        );

        $curso = Curso::find($request->id);
        $curso->nombre_curso = $request->nombre_curso;
        $curso->biografia_curso = $request->biografia_curso;
        $curso->precio = $request->precio;
        $curso->idusu = $request->idusu;
        $curso->save();
        return redirect("/moscur");

    }

    public function mostrarCurs(int $id)
    {
        $resultado = Curso::where("id", $id)->first();
        return view("delcur", ["resultado" => $resultado]);
    }

    Public function eliminar(Request $request){
        $curso=Curso::findOrFail($request->id);
        $curso->delete();
        return redirect("/moscur");
    }
}
