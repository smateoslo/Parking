<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsuarioController extends Controller
{

    public function inicio(){

        return view('crearUsuario');
    }
    public function crearUsuario(Request $request){

        $usuario = new User;
        $usuario->name = $request -> name;
        $usuario->apellido = $request -> apellido;
        $usuario->email = $request -> email;

        $usuario->save();

        return redirect('/listaUsuarios');
    }
    public function listaUsuario(){
        
        $usuarios['usuarios']=User::paginate();
        return view('listaUsuarios', $usuarios);
    }
}