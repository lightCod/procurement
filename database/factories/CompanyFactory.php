<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'nuit' => $faker->numberBetween($min = 1000000, $max = 9999999),
        'adrees' => $faker->address,
        'landLine' => $faker->phoneNumber,
        'mobilePhone' => $faker->phoneNumber,
        'e-mail' => $faker->email
    ];
});
