<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
      "name" => $faker ->firstName,
      "email" => $faker ->email,
      "password" => $faker ->password,
      "nickname" => $faker ->firstName,
      "country" => $faker ->country,
      "about"=> $faker ->text($maxNbChars = 100),
      "skills"=> $faker ->text($maxNbChars = 5),
      "profile_pic"=> $faker -> imageUrl($width = 180, $height = 180),
      "banner_pic"=> $faker -> imageUrl($width = 1980, $height = 420),
      'remember_token' => Str::random(10),

    ];
});
