<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Nerd;
use Faker\Generator as Faker;

$factory->define(Nerd::class, function (Faker $faker) {
    return [
        'email' => $faker->email,
        'name' => $faker->name,
        'nerd_level' => $faker->randomDigit,
    ];
});
