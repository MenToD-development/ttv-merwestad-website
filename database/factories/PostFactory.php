<?php

/** @var Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->title;

    return [
        'user_id' => factory(\App\User::class)
            ->create()
            ->id,
        'title' => $title,
        'slug' => \Illuminate\Support\Str::slug($title, '-'),
        'main_image' => $faker->image(),
        'message' => $faker->text,
        'excerpt' => $faker->paragraph,
        'published_on' => $faker->dateTime,
        'published_till' => null
    ];
});
