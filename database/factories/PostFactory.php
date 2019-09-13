<?php

use dcuesta1\Velblog\Post;

$factory->define(Post::class, function(Faker\Generator $faker) {
    return [
        'identifier' => sha1(rand()),
        'user_id' => 1,
        'slug' => $faker->sentence,
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
        'status' => 1
    ];
});
