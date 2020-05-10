<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\News;
use Faker\Generator as Faker;

$factory->define(News::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->sentence(3),
        'introduction' => $faker->sentence(30),
        'description' => $faker->sentence(100),
        'about' => $faker->sentence(100),
        'calification'=> $faker->numberBetween(40,100),
        'publish_date' => $faker->date('Y-m-d H:i'),
        'featured' => $faker->boolean,
        'user_id' => $faker->numberBetween(1,52),
        'category_id' => $faker->numberBetween(1,6),
        'clasification_id' => $faker->numberBetween(1,3),
    ];
});
