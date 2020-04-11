<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Topic;
use Faker\Generator as Faker;

$factory->define(Topic::class, function (Faker $faker) {
    return [
      'user_id' => factory(\App\User::class),
      'name' => $faker->word,
    ];
});
