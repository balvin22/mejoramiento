<?php

namespace App\Http\Controllers;

use App\Models\Destino;
use Illuminate\Http\Request;

class DestinoController extends Controller
{
    public function inicio(){
        return view('destino.formulario');
    }


    public function store(Request $request){
        $destino = new Destino();
        $destino->codigo = $request->codigo;
        $destino->nombre = $request->nombre;
        $destino->otrosDatos = $request->otrosDatos;
        $destino->save();
        return redirect()->route('viajero.index');
    }


    public function index(){
        $destino = Destino::all();
        return view('destino.index', compact('destino'));
    }


    public function show($id){
        $destino = Destino::find($id);

        return view('destino.show', compact('destino'));
    }


    public function update(Request $request, $id){
        $destino = Destino::find($id);
        $destino->codigo = $request->codigo ?? $destino->codigo;
        $destino->nombre = $request->nombre ?? $destino->nombre;
        $destino->otrosDatos = $request->otrosDatos ??  $destino->otrosDatos;
        $destino->save();


        return redirect()->route('destino.index');
    }

    public function destroy($id){
        $destino = Destino::find($id);

        $destino->delete();
        return redirect()->route('destino.index');
    }


    public function edit($id) {
        $destno = Destino::find($id);

        return view('destino.edit', compact('destino'));
    }
}
