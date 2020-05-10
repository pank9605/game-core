<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\NewsImage;
use Faker\Generator as Faker;

$factory->define(NewsImage::class, function (Faker $faker) {

    return [
        //
        'image' => $faker->imageUrl(1000,1000),
        'featured' => $faker->boolean,
        'news_id' => $faker->numberBetween(1,50)
    ];
});
