<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Agente;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
  
    public function index()
    {
        $clientes = Cliente::all();
        return $clientes;
    }

    public function store(Request $request)
    {
        $cliente = new Cliente();
        /* $cliente->id_agente = $request->id_agente; */
        $cliente->nombres = $request->nombres;
        $cliente->cedula = $request->cedula;
        $cliente->celular = $request->celular;
        $cliente->direccion = $request->direccion;
        $cliente->ciudad = $request->ciudad;
        $cliente->save();

        /* $cliente->agentes()->attach($request->agentes); */
    }

  
    public function show($id)
    {
        $cliente = Cliente::find($id);
        return $cliente;
    }

 
    public function update(Request $request, $id)
    {
        $cliente= Cliente::findOrFail($request->id);
        /* $cliente= Agente::findOrFail($request->id); */
       /*  $cliente->id_agente = $request->id_agente; */
        $cliente->nombres = $request->nombres;
        $cliente->cedula = $request->cedula;
        $cliente->celular = $request->celular;
        $cliente->direccion = $request->direccion;
        $cliente->ciudad = $request->ciudad;

        $cliente->save();
        return $cliente;
    }

   
    public function destroy($id)
    {
        $cliente = Cliente::destroy($id);
        return $cliente;
    }
}
