<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'nuit' => $faker->creditCardNumber,
        'adrees' => $faker->adress,
        'landLine' => $faker->phoneNumber,
        'mobilePhone' => $faker->cellNumber,
        'e-mail' => $faker->email
    ];
});
