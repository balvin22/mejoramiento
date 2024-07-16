<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    //modelo mucho a mucho
    public function colaboradores(){
        return $this->belongsToMany(Colaborador::class);
    }
    // modelo hijo 1  a muchos
    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }
}
