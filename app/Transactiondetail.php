<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transactiondetail extends Model
{
    public function pizza()
    {
        return $this->hasOne('App\Pizza', 'id', 'PizzaID');
    }
}
