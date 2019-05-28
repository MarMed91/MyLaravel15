<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
      "category_name" => $faker->word,
      "number_of_posts" => $faker->randomDigitNotNull,
      "post_id" => $faker->randomDigitNotNull
    ];
});
