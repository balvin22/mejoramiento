<?php

namespace App\Http\Controllers;

use App\Models\Viajero;
use Illuminate\Http\Request;

class ViajeroController extends Controller
{
    public function inicio(){
        return view('viajero.formulario');
    }


    public function store(Request $request){
        $viajero = new Viajero();
        $viajero->dni = $request->dni;
        $viajero->nombre = $request->nombre;
        $viajero->direccion = $request->direccion;
        $viajero->telefono = $request->telefono;
        $viajero->save();
        return redirect()->route('viajero.index');
    }


    public function index(){
        $viajero = Viajero::all();
        return view('viajero.index', compact('viajero'));
    }


    public function show($id){
        $viajero = Viajero::find($id);

        return view('viajero.show', compact('viajero'));
    }


    public function update(Request $request, $id){
        $viajero = Viajero::find($id);
        $viajero->dni = $request->dni ?? $viajero->dni;
        $viajero->nombre = $request->nombre ?? $viajero->nombre;
        $viajero->direccion = $request->direccion ??  $viajero->direccion;
        $viajero->telefono = $request->telefono ?? $viajero->telefono;
        $viajero->save();


        return redirect()->route('viajero.index');
    }

    public function destroy($id){
        $viajero = Viajero::find($id);

        $viajero->delete();
        return redirect()->route('viajero.index');
    }


    public function edit($id) {
        $viajero = Viajero::find($id);

        return view('viajero.edit', compact('viajero'));
    }
}
