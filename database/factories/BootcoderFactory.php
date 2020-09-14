<?php

use App\Bootcoder;
use Faker\Generator as Faker;


$factory->define(Bootcoder::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName(),
        'last_name' => $faker->lastName(),
        'email' => $faker->unique()->safeEmail(),      
    ];
});