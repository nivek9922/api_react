<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombres',
        'cedula',
        'celular',
        'direccion',
        'ciudad',
    ];

//Relacion uno a muchos inversa
    public function agentes(){
        return $this->belongsTo(Agente::class,'agentes_asginados');
    }

}


