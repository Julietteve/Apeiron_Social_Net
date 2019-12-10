<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
      'created_at' => $faker->dateTime($max = 'now', $timezone = null),
      'post_text' => $faker->text($maxNbChars = 100),
      'post_image' => $faker->imageUrl($width = 299, $height = 168),
      'user_id' => $faker->numberBetween($min = 1, $max = 200)
    ];
});
