<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
     public function booking(){
        return $this->hasMany('App\Booking','booking_id');//Select * from booking whrer id=1;
     }
    // protected $table = "customer";
    // public $timestamps = false;

    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        'address',
    ];
}
