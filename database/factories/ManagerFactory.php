<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Manager;
use Faker\Generator as Faker;

$factory->define(Manager::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'cell' => $faker->phoneNumber,
        'email' => $faker->email,
        'user_type' => $faker->word,
        'users_id' => $faker->numberBetween($min = 1, $max = 5),
        'companies_id' => $faker->numberBetween($min = 1, $max = 5)
    ];
});
