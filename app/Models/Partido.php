<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    use HasFactory;

    // modelo mucho a mucho
    public function equipos(){
        return $this->belongsToMany(Equipo::class);
    }
    // modelo padre 1 a muchp
    public function goles()
    {
        return $this->hasMany(Gol::class);
    }
}
