<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Basket;
use App\Model\User;
use Faker\Generator as Faker;

$factory->define(Basket::class, function (Faker $faker) {
    return [
        'session_id' => uniqid(),
        'user_id' => factory(User::class)->create(),
    ];
});
