<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
    use HasFactory;
    // modelo hijo 1 a muchos
    public function viajero(){
        return $this->belongsTo(Viajero::class);
    }
    // modelo hijo 1 a muchos
    public function origen(){
        return $this->belongsTo(Origen::class);
    }
    //modelo hijo 1 a muchos
    public function destino(){
        return $this->belongsTo(destino::class);
    }
}
