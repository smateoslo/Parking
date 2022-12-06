<?php

use App\Models\User;
use App\Models\Coche;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/usuario/coche', function(){
    $usuarios = User::all();
    foreach($usuarios as $usuario){
        $coche = Coche::where('user_id', $usuarios->id)
        ->get();
        echo $coche;
    }
});

Route::get('/usuario/{id}', function($id){
    $usuario = User::find($id);
    return $usuario;
});

Route::get('/coche/ultimo', function(){
    $coche = Coche::where('created_at', '<', now())
    ->limit(10)
    ->orderBy('created_at', 'DESC')
    ->get();
    return $coche;
});
