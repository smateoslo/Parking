<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Coche;
use Illuminate\Http\Request;

class BusquedaController extends Controller
{
    public function inicio(){

        $coches = Coche::all();
        $usuarios = User::all();  

        return view('busqueda', ['coches' => $coches] , ['usuarios' => $usuarios]);
    }

    public function buscar(Request $request){

        $usuarios = User::all();  

        $coches = $request->except("_token");

        if($request->get('buscador')){
            $coches = Coche::where("created_at", "LIKE", "%{$request->get('buscador')}%")
                ->paginate();
                return view('busqueda', ['coches' => $coches] , ['usuarios' => $usuarios]);
        }

        return view('busqueda');
    }

    public function listaCocheUsuario(Request $request){

        $usuarios = User::all(); 
        $coches = Coche::all();

        if($request->get('users')){
             $coches = Coche::where('user_id', "LIKE", "%{$request->get('users')}%")->paginate();

            return view('busqueda', ['coches' => $coches] , ['usuarios' => $usuarios]);
        }

        return view('busqueda');
    }
}
