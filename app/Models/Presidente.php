<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presidente extends Model
{
    use HasFactory;
    // modelo padre 1 a 1
    public function equipo(){
        return $this->hasOne(Equipo::class);
    }
}
