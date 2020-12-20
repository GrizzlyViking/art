<?php

/** @var Factory $factory */

use App\Model\Price;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Price::class, function (Faker $faker) {
    return [
        'currency_code' => $faker->randomElement(['DKK', 'EUR', 'GBP', 'USD', 'ARS']),
        'amount' => $faker->randomNumber(4),
    ];
});
