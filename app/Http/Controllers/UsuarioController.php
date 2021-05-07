<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function guardar(Request $data)
    {
        $usuario = new Usuario();
        $usuario->tipo_usu = $data["tipo_usu"];
        $usuario->nombre_usu = $data["nombre"];
        $usuario->correo = $data["correo"];
        $usuario->contrasenia = $data["contrasenia"];
        $usuario->dni = $data["dni"];
        $usuario->direccion = $data["direccion"];
        $usuario->save();
        return "Usuario guardada";

    }

    public function mostrar()
    {
        $resultado = Usuario::where("id", 1)->get();
        return view("mosusu", ["resultado" => $resultado]);
    }

    public function mostrarUsu(int $id)
    {
        $resultado = Usuario::where("id", $id)->first();
        return view("actusu", ["resultado" => $resultado]);
    }

    public function actualizar(Request $request)
    {
        $usuario = Usuario::find($request->id);
        $usuario->tipo_usu = $request->tipo_usu;
        $usuario->nombre_usu = $request->nombre_usu;
        $usuario->correo = $request->correo;
        $usuario->contrasenia = $request->contrasenia;
        $usuario->dni = $request->dni;
        $usuario->direccion = $request->direccion;
        $usuario->save();
        return "actualizado";

    }
}
