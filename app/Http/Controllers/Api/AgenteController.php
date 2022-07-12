<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Agente;
use Illuminate\Http\Request;

class AgenteController extends Controller
{
    public function index()
    {
        $agentes = Agente::all();
        return $agentes;
    }

    public function store(Request $request)
    {
        $agente = new Agente();
        $agente->nombre = $request->nombre;
        $agente->cedula_agente = $request->cedula_agente;
       
        $agente->save();

    }

  
    public function show($id)
    {
        $agente = Agente::find($id);
        return $agente;
    }

 
    public function update(Request $request, $id)
    {
        $agente= Agente::findOrFail($request->id);
        $agente->nombre = $request->nombre;
        $agente->cedula_agente = $request->cedula_agente;
   

        $agente->save();
        return $agente;
    }

   
    public function destroy($id)
    {
        $agente = Agente::destroy($id);
        return $agente;
    }
}
