<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\PedidoController;
use App\Models\Usuario;
use App\Models\Curso;
use App\Models\Pedido;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', "primero");
Route::view("/layout","layout");
Route::view("/layout1","layout1");



Route::view("/usuario","usuario");
Route::get("/usuario/{idcolumna}", function (int $idcolumna){
    return view("usuario")->with("idc",$idcolumna);
});
Route::post("/usu", [UsuarioController::class,"guardar"]);
Route::get("/mosusu",  [UsuarioController::class,"mostrar"]);
Route::get("/actusu/{id}",  [UsuarioController::class,"mostrarUsu"],["id"=>"id"]);
Route::post("/actusu", [UsuarioController::class,"actualizar"]);


Route::view("/curso","curso");
Route::get("/curso/{idcolumna}", function (int $idcolumna){
    return view("curso")->with("idc",$idcolumna);
});
Route::post("/cur",[CursoController::class,"guardar"]);
Route::get("/moscur",[CursoController::class,"mostrar"]);
Route::get("/actcur/{id}",  [CursoController::class,"mostrarCur"],["id"=>"id"]);
Route::post("/actcur", [CursoController::class,"actualizar"]);



Route::view("/pedido","pedido");
Route::post("/ped", [PedidoController::class,"guardar"]);
Route::get("/mosped", [PedidoController::class,"mostrar"]);
