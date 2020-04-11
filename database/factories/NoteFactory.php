<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Note;
use Faker\Generator as Faker;

$factory->define(Note::class, function (Faker $faker) {
  
    $title = $faker->sentence;
    $slug = str_slug($title, '-');
    return [
        'user_id' => factory(\App\User::class),
        'topic_id' => factory(\App\Topic::class),
        'title' => $faker->sentence,
        'slug'=> $slug,
        'description' => $faker->sentence,
        'body' => $faker->paragraph,
        
    ];
});
