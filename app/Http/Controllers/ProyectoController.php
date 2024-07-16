<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function inicio(){
        $cliente = Cliente::all();
        return view('proyecto.formulario', compact("cliente"));
    }


    public function store(Request $request){
        $proyecto = new Proyecto();
        $proyecto->codigo = $request->codigo;
        $proyecto->descripcion = $request->descripcion;
        $proyecto->fechaInicio = $request->fechaInicio;
        $proyecto->fechaFin = $request->fechaFin;
        $proyecto->cliente_id = $request->cliente_id;
        $proyecto->save();
        return redirect()->route('proyecto.index');
    }


    public function index(){
        $proyecto = Proyecto::all();
        return view('proyecto.index', compact('proyecto'));
    }


    public function show($id){
        $proyecto = Proyecto::find($id);

        return view('proyecto.show', compact('proyecto'));
    }


    public function update(Request $request, $id){
        $proyecto = Proyecto::find($id);
        $proyecto->codigo = $request->codigo ?? $proyecto->codigo;
        $proyecto->descripcion = $request->descripcion ?? $proyecto->descripcion;
        $proyecto->fechaInicio = $request->fechaInicio ??  $proyecto->fechaInicio;
        $proyecto->fechaFin = $request->fechaFin ?? $proyecto->fechaFin;
        $proyecto->cliente_id = $request->cliente_id ?? $proyecto->cliente_id;
        $proyecto->save();


        return redirect()->route('proyecto.index');
    }

    public function destroy($id){
        $proyecto = Proyecto::find($id);

        $proyecto->delete();
        return redirect()->route('cliente.index');
    }


    public function edit($id) {
        $proyecto = Proyecto::find($id);
        $clientes = Cliente::all();
        return view('proyecto.edit', compact('proyecto','cliente'));
    }
}
