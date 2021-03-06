<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'UserID');
    }
}
