<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Post::class, function (Faker $faker) {
    return [
        'image'=> 'http://lorempixel.com/800/1000/food/',
        'category'=> $faker->numberBetween(1,2)
    ];
});
