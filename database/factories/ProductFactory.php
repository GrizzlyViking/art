<?php

/** @var Factory $factory */

use App\Model\Price;
use App\Model\Product;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(6, true),
        'description' => $faker->text(300),
        'meta' => ['size' => '70cm x 70cm'],
        'price_id' => factory(Price::class)
    ];
});
