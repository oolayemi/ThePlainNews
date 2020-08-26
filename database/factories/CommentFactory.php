<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'post_id' => $faker->numberBetween(1, 15),
        'name' => $faker->sentence(2),
        'email' => $faker->email,
        'message' => $faker->paragraph(10)
    ];
});
