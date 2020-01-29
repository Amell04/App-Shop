<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
     public function details()
    {     //datos de la clase Carrito de detalle
        return $this->hasMany(CartD::class);
    }
  
}
