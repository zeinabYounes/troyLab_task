<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        "name"=>$faker->name,
        "school_id"=>function () {
            return App\School::inRandomOrder()->first()->id;
        },
        "order_id"=>function () {
            return App\Order::inRandomOrder()->first()->id;
        },
    ];
});
