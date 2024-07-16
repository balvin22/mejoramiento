<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;
    // modelo hijo 1 a mucho
    public function colaborador(){
        return $this->belongsTo(Colaborador::class);
    }
    //modelo hijo 1 a mucho
    public function tipopago(){
        return $this->belongsTo(Tipopago::class);
    }

}
