<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CocheController;
use App\Http\Controllers\AsignarController;
use \App\Http\Controllers\UsuarioController;

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

//Route::get('/', [CocheController::class, 'index']);
Route::post('/coche', [CocheController::class, 'store']);
Route::get('/listaCoches', [CocheController::class, 'listaCoches']);
Route::get('/', [CocheController::class, 'nuevoCoche']);

Route::delete('/coche/{id}', [CocheController::class, 'eleminarCoche']);


Route::get('/usuario' , [UsuarioController::class, 'inicio']);
Route::post('/crearUsuario' , [UsuarioController::class, 'crearUsuario']);
Route::get('/listaUsuarios' , [UsuarioController::class, 'listaUsuario']);


Route::get('/inicioAsignar' , [AsignarController::class, 'inicio']);
Route::post('/asignar' , [AsignarController::class, 'asignar']);
