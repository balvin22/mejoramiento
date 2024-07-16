<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    // modelo padere 1 a muchos
    public function proyectos(){
        return $this->hasMany(Proyecto::class);
    }
}
