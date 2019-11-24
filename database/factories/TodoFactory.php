<?php

use Faker\Generator as Faker;

$factory->define(App\Todo::class, function (Faker $faker) {
    $userIds = \App\User::all()->pluck('id');
    return [
        'name' => $faker->words(3, true),
        'user_id' => $faker->randomElement($userIds)
    ];
});
