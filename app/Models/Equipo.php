<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    // modelo padre 1 a muchos
    public function jugadores(){
        return $this->hasMany(Jugador::class);
    }
    // modelo hijo 1 a 1
    public function presidente(){
        return $this->belongsTo(Presidente::class);
    }
    //mucho a muchos
    public function partidos(){
        return $this->belongsToMany(Partido::class);
    }


}
