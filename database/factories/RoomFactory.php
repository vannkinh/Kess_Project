<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Room;
use Faker\Generator as Faker;

$factory->define(Room::class, function (Faker $faker) {
    return [
        'people_number'=>$faker->peopleNumber,
        'floor'=>$faker->floor,
        'description'=>$faker->description,
        'shop_id'=>$faker->shopId,
        'price'=>$faker->price,
        'special_price'=>$faker->specialPrice,
        'status'=>$faker->status,
    ];
});
