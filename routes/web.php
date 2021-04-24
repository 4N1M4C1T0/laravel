<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UsuarioController;
use App\Models\Usuario;

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

Route::get('/usuarioqr', function () {
    $resultados = DB::select("select * from Usuario");
    dd($resultados);
});

Route::get('/cursoqr', function () {
    $resultados = DB::select("select * from Curso");
    dd($resultados);
});

Route::get('/pedidoqr', function () {
    $resultados = DB::select("select * from Pedido");
    dd($resultados);
});
