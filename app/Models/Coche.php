<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coche extends Model
{
    use HasFactory;

    protected $coche = 'coche';

    protected $fillable = ['matricula', 'marca', 'modelo'];

    protected $hidden = ['id'];

    
public function obtenerCoche(){
    return coche::all();
}
public function obtenerCocheId($id){
    return coche::find($id);
}

}