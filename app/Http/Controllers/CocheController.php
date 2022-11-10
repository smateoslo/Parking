<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use App\Models\Coche;

class CocheController extends Controller
{

    public function eleminarCoche($id){

        Coche::destroy($id);
        return redirect('/');
    }

    public function store (Request $request){

        $coches = $request->except("_token");
        Coche::insert($coches);

        return redirect('/');
    }

    public function index (){
        
        $coches['coches']=Coche::paginate(30);
        return view("inicio", $coches);
    }
}