<?php

/** @var Factory $factory */

use App\Model\BasketItem;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(BasketItem::class, function (Faker $faker) {
    return [
        'session_id' => $faker->unique()
    ];
});
