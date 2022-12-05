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

        $coches = $request->except("_token");

        if($request->get('lista')){

            $coches = Coche::select(['id','matricula', 'marca', 'modelo', 'created_at' => function($query){
                $query->select('name')->from('users')->whereColumn('user_id' , 'users.id' );
            }])->get();

            return view('busqueda', ['coches' => $coches] , ['usuarios' => $usuarios]);
        }

        return view('busqueda');
    }
}
