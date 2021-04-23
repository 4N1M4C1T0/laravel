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
    $resultados = DB::select("select * from Usuarios");
    dd($resultados);
});

Route::get('/usuarioqb', function () {
    $resultados = DB::table("Usuarios")->where("idusu",1)->value("correo");
    dd($resultados);
});

Route::get('/usuariolq', function () {
    $resultados = Usuario::all();
    dd($resultados);
});
