<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipopago extends Model
{
    use HasFactory;
    // modelo padre 1 a mucho
    public function pagos(){
        return $this->hasMany(Pago::class);
    }
}
