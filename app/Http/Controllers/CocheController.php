<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CocheController extends Controller
{
    public function mostrarLista(){
        $coche = DB::table('coche')->get();
        return view('inicio', ['coche' => $coche]);
    }
    public function anadeCoche($peticion){
        return view('inicio');
    }
    public function eleminarCoche(){
        return view('inicio');
    }
}