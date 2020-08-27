<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function booking(){
        return $this->hasMany('App\Booking');
    }
}
