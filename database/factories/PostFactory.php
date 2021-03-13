<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->text(50),
        'url' => "",
        'target' => "_blank",
        'detail' => $faker->realText(rand(10, 20))
    ];
});
