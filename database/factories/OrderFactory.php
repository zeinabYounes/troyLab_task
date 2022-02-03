<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Order::class, function (Faker $faker) {
    return [
        "student_name"=> $faker->name,
        "status"=>$faker->randomElement(['accepted','refused','suspended']),
        "school_id"=>function () {
            return App\School::inRandomOrder()->first()->id;
        },
    ];
});
