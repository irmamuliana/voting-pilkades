<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    
    $title      = $faker->sentence($nbWords = 6, $variableNbWords = true);
    $slug       = \Str::slug($title, '-');

    return [
        'title'             =>  $title,
        'slug'              =>  $slug,
        'description'       =>  $faker->sentence($nbWords = 60, $variableNbWords = true), 
        'publish'           =>  1,
        'user_id'           =>  1,
        'category_id'       =>  1,
        'price'             =>  50000,
        'video_preview_url' =>  'video.mp4',
        'created_at'        =>  now(),
        'updated_at'        =>  now()
    ];
});
