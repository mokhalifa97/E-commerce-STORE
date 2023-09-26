<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Category;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(Category::class, function (Faker $faker) {
    $category_name= $this->faker->unique()->words($nb=2,$astext= true);
    $slug= Str::slug($category_name,'-');
    return [
        "name" => $category_name,
        "slug" => $slug
    ];
});
