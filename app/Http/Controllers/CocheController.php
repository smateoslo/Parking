<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use App\Models\Coche;

class CocheController extends Controller
{
    public $busqueda;

    public function eleminarCoche($id){

        Coche::destroy($id);
        return redirect('/listaCoches');
    }
    
    public function listaCoches(Request $request){

        $coches = $request->except("_token");

        if($request->get('buscador')){
            $coches = Coche::where("matricula", "LIKE", "%{$request->get('buscador')}%")
                ->paginate(5);
          return view('listaCoches')->with('coches', $coches);
        }

        $coches['coches']=Coche::paginate(10);
        return view('listaCoches', $coches);
    }

    public function nuevoCoche(Request $request){
        return view('nuevoCoche');
    }

    public function store (Request $request){

        $request->validate([
            'matricula' => 'required|max:7|regex:/[0-9][A-Z]{3}/',
            'marca' => 'required',
            'modelo' => 'required'
        ]);

        $coches = new Coche;
        $coches -> matricula = $request -> matricula;
        $coches -> marca = $request -> marca;
        $coches -> modelo = $request -> modelo;
        $coches -> save();

        return redirect('/listaCoches');
    }

public function buscar(){
    
}

//    public function index (){
        
//       $coches['coches']=Coche::paginate(6);
//       return view("nuevoCoche", $coches);
//   }


}