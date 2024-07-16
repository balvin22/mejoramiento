<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gol extends Model
{
    use HasFactory;
    // modelo hijo 1 a mucho
    public function jugador(){
        return $this->belongsTo(Jugador::class);
    }
    // modelo hijo 1 a mucho
    public function partido()
    {
        return $this->belongsTo(Partido::class);
    }
}
