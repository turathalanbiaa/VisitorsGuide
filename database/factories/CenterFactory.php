<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Center::class, function (Faker $faker) {
    return [
        'name' => $faker->city,
        'password' =>bcrypt('secret'),
        't_number' =>$faker->numberBetween(1,1400),
        'session' =>$faker->word,
        'date' =>$faker->date(),
        'phone' => $faker->phoneNumber,
    ];
});

