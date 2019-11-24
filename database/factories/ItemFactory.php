<?php

use Faker\Generator as Faker;

$factory->define(App\item::class, function (Faker $faker) {
    $todoIds = \App\Todo::all()->pluck('id');
    return [
        'name' => $faker->word,
        'todo_id' => $faker->randomElement($todoIds)
    ];
});
