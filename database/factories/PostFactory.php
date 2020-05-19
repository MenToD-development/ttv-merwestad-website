<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->title;

    return [
        'user_id' => factory(\App\User::class)
            ->create()
            ->id,
        'title' => $title,
        'slug' => \Illuminate\Support\Str::slug($title),
        'main_image' => $faker->image(),
        'message' => $faker->paragraphs,
        'excerpt' => $faker->paragraph,
        'published_on' => $faker->dateTime,
        'published_till' => null
    ];
});
