<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Jugador;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    public function taller(){
        return view('taller');
    }
    public function inicio(){
        $equipos = Equipo::all();
        return view('jugador.formulario',compact('equipos'));
    }


    public function store(Request $request){
        $jugador = new Jugador();
        $jugador->nombre = $request->nombre;
        $jugador->posicion = $request->posicion;
        $jugador->fechanacimiento = $request->fechanacimiento;
        $jugador->equipo_id = $request->equipo_id;
        $jugador->save();
        return redirect()->route('jugador.index');
    }


    public function index(){
        $jugador = Jugador::all();
        return view('jugador.index', compact('jugador'));
    }


    public function show($id){
        $jugador = Jugador::with('equipo')->find($id);
        return view('jugador.show', compact('jugador'));
        // $jugador = Jugador::find($id);

        // return view('jugador.show', compact('jugador'));
    }


    public function update(Request $request, $id){
        $jugador = Jugador::find($id);
        $jugador->nombre = $request->nombre ?? $jugador->nombre;
        $jugador->posicion = $request->posicion ?? $jugador->posicion;
        $jugador->fechanacimiento = $request->fechanacimiento ?? $jugador->fechanacimiento;
        $jugador->equipo_id = $request->equipo_id ?? $jugador->equipo_id;
        $jugador->save();


        return redirect()->route('jugador.index');
    }

    public function destroy($id){
        $jugador = Jugador::find($id);

        $jugador->delete();
        return redirect()->route('jugador.index');
    }


    public function edit($id) {
        $jugador = Jugador::find($id);
        // return view('jugador.edit', compact('jugador'));
        $equipos = Equipo::all();
        return view('jugador.edit', compact('jugador', 'equipos'));

    }
}
