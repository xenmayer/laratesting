<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Author::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'last_name' => $faker->lastName,
    ];
});
