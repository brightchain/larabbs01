<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Reply::class, function (Faker $faker) {
    $updated_at = $faker->dateTimeThisMonth();
    $created_at = $faker->dateTimeThisMonth($updated_at);
    return [
        // 'name' => $faker->name,
        'content' => $faker->sentence(),
        'created_at' => $created_at,
        'updated_at' => $updated_at,

    ];
});
