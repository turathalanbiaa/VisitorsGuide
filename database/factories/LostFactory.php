<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Lost::class, function (Faker $faker) {
    return [
        'center_id' => $faker->numberBetween(1,100),
        'category' =>  $faker->numberBetween(1,4),
        'description' =>  $faker->sentence,
        'datetime' => $faker->dateTime,
        'file_name' => 'empty-photo.jpg',
    ];
});