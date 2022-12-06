<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coche;

class CocheController extends Controller
{

    public function eleminarCoche($id){

        Coche::destroy($id);
        return redirect('/');
    }
    

    public function nuevoCoche(Request $request){


        $coches = $request->except("_token");

        if($request->get('buscador')){
            $coches = Coche::where("matricula", "LIKE", "%{$request->get('buscador')}%")->get();
          return view('listaCoches')->with('coches', $coches);
        }

        $coches = Coche::all();
        return view('nuevoCoche', ['coches' => $coches]);
    }

    public function store (Request $request){

        $request->validate([
            'matricula' => 'required|max:7|regex:/[0-9][A-Z]{3}/',
            'marca' => 'required|min:3|max:15',
            'modelo' => 'required|min:1|max:15'
        ]);

        $coches = new Coche;
        $coches -> matricula = $request -> matricula;
        $coches -> marca = $request -> marca;
        $coches -> modelo = $request -> modelo;
        $coches -> save();

        return redirect('/');
    }


}