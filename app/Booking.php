<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function customer(){
        return $this->belongTo('App\Customer', 'customer_id');//Select * from user where booking_id=1;
    }
}
