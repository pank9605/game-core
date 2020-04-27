<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Address;
use Faker\Generator as Faker;

$factory->define(Address::class, function (Faker $faker) {
    return [
        //
        'street' => $faker->streetName,
        'colony' => $faker->citySuffix,
        'interior_number' => $faker->buildingNumber,
        'outdoor_number' => $faker->buildingNumber,
        'phone' => $faker->phoneNumber,
        'cellphone' => $faker->phoneNumber,
        'city' => $faker->city,
        'post_code' => $faker->postcode,
        'user_id' => $faker->unique()->numberBetween(1,50)
    ];
});
