<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function inicio(){
        return view('cliente.formulario');
    }


    public function store(Request $request){
        $cliente= new Cliente();
        $cliente->codigo = $request->codigo;
        $cliente->telefono = $request->telefono;
        $cliente->domicilio = $request->domicilio;
        $cliente->numeroSocial = $request->numeroSocial;
        $cliente->save();
        return redirect()->route('cliente.index');
    }


    public function index(){
        $cliente = Cliente::all();
        return view('cliente.index', compact('cliente'));
    }


    public function show($id){
        $cliente = Cliente::find($id);

        return view('cliente.show', compact('cliente'));
    }


    public function update(Request $request, $id){
        $cliente = Cliente::find($id);
        $cliente->codigo = $request->codigo ?? $cliente->codigo;
        $cliente->telefono = $request->telefono ?? $cliente->telefono;
        $cliente->domicilio = $request->domicilio ?? $cliente->domicilio;
        $cliente->numeroSocial = $request->numeroSocial ?? $cliente->numeroSocial;
        $cliente->save();



        return redirect()->route('cliente.index');
    }

    public function destroy($id){
        $cliente = Cliente::find($id);

        $cliente->delete();
        return redirect()->route('cliente.index');
    }


    public function edit($id) {
        $cliente = Cliente::find($id);

        return view('cliente.edit', compact('cliente'));
    }
}
