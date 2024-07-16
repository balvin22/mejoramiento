<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Psy\TabCompletion\Matcher\FunctionsMatcher;

class Colaborador extends Model
{
    use HasFactory;
    // modelo mucho a mucho
    public function proyectos(){
        return $this->belongsToMany(Proyecto::class);
    }
    // modelo padere 1 a muchos 
    public function pagos(){
        return $this->hasMany(Pago::class);
    }
}
