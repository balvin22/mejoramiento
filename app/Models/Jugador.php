<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;
    // modelo padre 1 a muchos
    public function goles(){
        return $this->hasMany(Gol::class);
    }
    //modelo hijo 1 a muchos
    public function equipo(){
        return $this->belongsTo(Equipo::class);

    }
}
