<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;

class PedidoController extends Controller
{
    public function guardar(Request $data){
        $pedido = new Pedido();
        $pedido->idcurso = $data["idcurso"];
        $pedido->idusu = $data["idusu"];
        $pedido->importe_total = $data["importe_total"];
        $pedido->save();
        return "Pedido guardado";

    }

    public function mostrar(){
        $resultado = Pedido::where("idped",1)->get();
        return view("mosped",["resultado"=>$resultado]);
    }
}
