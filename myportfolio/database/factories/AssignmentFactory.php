<?php

use Faker\Generator as Faker;

$factory->define(App\Assignment::class, function (Faker $faker) {
    return [
        'project_name' => $faker->name,
        'image_url' => $faker->imageUrl($width = 640, $height = 480),
        'description' => $faker->name
    ];
});
