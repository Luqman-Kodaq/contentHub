<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'slug' => $faker->text(15),
        'title' => $faker->text(50),
        'excerpt' => $faker->text(100),
        'content' => $faker->text(200),
        'published_at' => $faker->dateTime()
    ];
});
