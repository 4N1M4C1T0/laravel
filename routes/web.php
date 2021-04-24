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

Route::view('/', "welcome");


Route::view("/usuario","usuario");
Route::post("/usu", [UsuarioController::class,"guardar"])->name("Guardar Usuario");
Route::get("/mosusu",  [UsuarioController::class,"mostrar"]);


Route::view("/curso","curso");
Route::post("/cur",[CursoController::class,"guardar"])->name("Guardar Curso");
Route::get("/moscur",[CursoController::class,"mostrar"]);

Route::view("/pedido","pedido");
Route::post("/ped", [PedidoController::class,"guardar"])->name("Guardar pedido");
Route::get("/mosped", [PedidoController::class,"mostrar"]);
