<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Anounce;
use Faker\Generator as Faker;

$factory->define(Anounce::class, function (Faker $faker) {
    return [
        'title' =>$faker->sentence($nbWords = 2, $variableNbWords = true),
        'access' => $faker->numberBetween($min = 1, $max = 10),
        'fileDesc' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'companies_id' => $faker->numberBetween($min = 1, $max = 5)
    ];
});
