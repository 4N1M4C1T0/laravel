<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;

class PedidoController extends Controller
{
    public function guardar(Request $data){
        $data->validate(
            ['idcurso' => 'required',
                'idusu'=> 'required',
                'importe_total' => 'required']
        );
        $pedido = new Pedido();
        $pedido->idcurso = $data["idcurso"];
        $pedido->idusu = $data["idusu"];
        $pedido->importe_total = $data["importe_total"];
        $pedido->save();
        return "Pedido guardado";

    }

    public function mostrar(){
        $resultado = Pedido::all();
        return view("mosped",["resultado"=>$resultado]);
    }

    public function mostrarPed(int $id)
    {
        $resultado = Pedido::where("id", $id)->first();
        return view("actped", ["resultado" => $resultado]);
    }

    public function actualizar(Request $request)
    {
        $request->validate(
            ['idcurso' => 'required',
                'idusu'=> 'required',
                'importe_total' => 'required']
        );
        $pedido = Pedido::find($request->id);
        $pedido->idcurso = $request->idcurso;
        $pedido->idusu = $request->idusu;
        $pedido->importe_total = $request->importe_total;
        $pedido->save();
        return redirect("/mosped");

    }

    public function mostrarPeds(int $id)
    {
        $resultado = Pedido::where("id", $id)->first();
        return view("delped", ["resultado" => $resultado]);
    }

    Public function eliminar(Request $request){
        $pedido=Pedido::findOrFail($request->id);
        $pedido->delete();
        return redirect("/mosped");
    }
}
