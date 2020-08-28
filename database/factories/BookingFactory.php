<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Booking;
use Faker\Generator as Faker;

$factory->define(Booking::class, function (Faker $faker) {
    return [
        'Date' => $faker->date,
        'start_date' => $faker->date,
        'end_date' => $faker->date,
        

    ];
});
