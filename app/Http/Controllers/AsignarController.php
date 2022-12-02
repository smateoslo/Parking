<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Coche;
use Illuminate\Http\Request;

class AsignarController extends Controller
{
    public function inicio()
    {
        $coches = Coche::all();
        $usuarios = User::all();        
        return view('asignar', ['coches' => $coches] , ['usuarios' => $usuarios]);
    }

    public function asignar(Request $request){

        $usuarioAsignado = User::find($request->get('users'));
        $cochesAsignada = Coche::find($request->get('coches'));
        $usuarioAsignado->coches()->save($cochesAsignada);
        
        
        return redirect('/inicioAsignar');
    }
}
