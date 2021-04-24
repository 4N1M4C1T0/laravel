<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function guardar(Request $data){
        $usuario = new Usuario();
        $usuario->tipo_usu = $data["tipo_usu"];
        $usuario->nombre_usu = $data["nombre"];
        $usuario->correo = $data["correo"];
        $usuario->contrasenia = $data["contrasenia"];
        $usuario->dni = $data["dni"];
        $usuario->direccion = $data["direccion"];
        $usuario->save();
        return "Nota guardada";

    }

    public function mostrar(){
        $resultado = Usuario::where("idusu",3)->get();
        return view("mosusu",["resultado"=>$resultado]);
    }

}
