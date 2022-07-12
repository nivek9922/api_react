<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'cedula_agente'
    ];

//Relacion uno a muchos

public function clientes(){
    return $this->hasMany(Cliente::class,'agentes_asginados');
}
}

