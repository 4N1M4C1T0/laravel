<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function guardar(Request $data)
    {
        $data->validate(
            [
                'nombre_usu'=> 'required | alpha',
                'correo' => 'required',
                'contrasenia' => 'required | min:4 | max:32',
                'dni' => 'required | min:8',
                'direccion' => 'required']
        );
        $usuario = new Usuario();
        $usuario->tipo_usu = $data["tipo_usu"];
        $usuario->nombre_usu = $data["nombre_usu"];
        $usuario->correo = $data["correo"];
        $usuario->contrasenia = $data["contrasenia"];
        $usuario->dni = $data["dni"];
        $usuario->direccion = $data["direccion"];
        $usuario->save();
        return "Usuario guardada";

    }

    public function mostrar()
    {
        $resultado = Usuario::all();
        return view("mosusu", ["resultado" => $resultado]);
    }

    public function mostrarUsu(int $id)
    {
        $resultado = Usuario::where("id", $id)->first();
        return view("actusu", ["resultado" => $resultado]);
    }

    public function actualizar(Request $request)
    {
        $request->validate(
            ['tipo_usu' => 'required',
                'nombre_usu'=> 'required | alpha',
                'correo' => 'required',
                'contrasenia' => 'required | min:4 | max:32',
                'dni' => 'required | min:8',
                'direccion' => 'required']
        );
        $usuario = Usuario::find($request->id);
        $usuario->tipo_usu = $request->tipo_usu;
        $usuario->nombre_usu = $request->nombre_usu;
        $usuario->correo = $request->correo;
        $usuario->contrasenia = $request->contrasenia;
        $usuario->dni = $request->dni;
        $usuario->direccion = $request->direccion;
        $usuario->save();
        return redirect("/mosusu");

    }

    public function mostrarUsua(int $id)
    {
        $resultado = Usuario::where("id", $id)->first();
        return view("delusu", ["resultado" => $resultado]);
    }

    Public function eliminar(Request $request){
        $usuario=Usuario::findOrFail($request->id);
         $usuario->delete();
         return redirect("/mosusu");
    }

}
