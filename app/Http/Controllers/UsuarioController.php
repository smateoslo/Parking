<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsuarioController extends Controller
{

    public function inicio(){

        $usuarios = User::all();

        return view('crearUsuario', ['usuarios' => $usuarios]);
    }
    public function crearUsuario(Request $request){

        $request->validate([
            'name' => 'required',
            'apellido' => 'required',
            'email' => 'required'
        ]);

        $usuario = new User;
        $usuario->name = $request -> name;
        $usuario->apellido = $request -> apellido;
        $usuario->email = $request -> email;

        $usuario->save();
        return redirect('/usuario');
    }
}