<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(Product::class, function (Faker $faker) {
    $product_name= $this->faker->unique()->words($nb=6,$astext= true);
    $slug= Str::slug($product_name,'-');
    return [
        "name" => $product_name,
        "slug" => $slug,
        "short_description" => $this->faker->text(200),
        "description" => $this->faker->text(500),
        "regular_price" => $this->faker->numberBetween(10,500),
        "SKU" => "PRD" . $this->faker->unique()->numberBetween(10,500),
        "stock_status" => "instock",
        "quantity" => $this->faker->numberBetween(10,50),
        "image" => "product" . $this->faker->numberBetween(1,16),
        "category_id" => $this->faker->numberBetween(1,5),

    ]; 
});
