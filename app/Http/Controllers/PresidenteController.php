<?php

namespace App\Http\Controllers;

use App\Models\Presidente;
use Illuminate\Http\Request;

class PresidenteController extends Controller
{
    public function inicio(){
        return view('presidente.formulario');
    }


    public function store(Request $request){
        $presidente = new Presidente();
        $presidente->nombre = $request->nombre;
        $presidente->apellidos = $request->apellidos;
        $presidente->fecha = $request->fecha;
        $presidente->año = $request->año;
        $presidente->save();
        return redirect()->route('presidentes.index');
    }


    public function index(){
        $presidente = Presidente::all();
        return view('presidente.index', compact('presidente'));
    }


    public function show($id){
        $presidente = Presidente::find($id);

        return view('presidente.show', compact('presidente'));
    }


    public function update(Request $request, $id){
        $presidente = Presidente::find($id);
        $presidente->nombre = $request->nombre ?? $presidente->nombre;
        $presidente->apellidos = $request->apellidos ?? $presidente->apellidos;
        $presidente->fecha = $request->fecha ??  $presidente->fecha;
        $presidente->año = $request->año ?? $presidente->año;
        $presidente->save();


        return redirect()->route('presidentes.index');
    }

    public function destroy($id){
        $presidente = Presidente::find($id);

        $presidente->delete();
        return redirect()->route('presidentes.index');
    }


    public function edit($id) {
        $presidente = Presidente::find($id);

        return view('presidente.edit', compact('presidente'));
    }
}
