<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => factory('App\User'),
        'title' => $faker->sentence,
        'media_link' => $faker->imageUrl(900, 400),
        'content' => $faker->paragraph(40),
        'category' => $faker->randomElement(['finance', 'politics', 'health', 'travel', 'breaking', 'international']),
        'likes' => $faker->numberBetween(1, 1000),
        'slug' => $faker->slug
    ];
});
