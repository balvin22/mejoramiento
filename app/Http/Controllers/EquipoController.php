<?php

namespace App\Http\Controllers;

use App\Models\Destino;
use App\Models\Equipo;
use Illuminate\Http\Request;
use Psy\TabCompletion\Matcher\FunctionsMatcher;

class EquipoController extends Controller
{
   public function inicio(){
    return view('equipo.formulario');
   }

   public function store(Request $request){
    $equipo = new Equipo();
    $equipo->nombre = $request->nombre;
    $equipo->ciudad = $request->ciudad;
    $equipo->estadio = $request->estadio;
    $equipo->aforo = $request->aforo;
    $equipo->año = $request->año;
    $equipo->save();
   }
}
