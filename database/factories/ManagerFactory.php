<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'cell' => $faker->cell,
        'email' => $faker->email,
        'user_type' => $faker->word,
        'users_id' => $faker->numberBetween($min = 1, $max = 15),
        'companies_id' => $faker->numberBetween($min = 1, $max = 5)
    ];
});
