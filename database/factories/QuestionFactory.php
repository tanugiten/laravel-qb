<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Question::class, function (Faker $faker) {//การสร้างแบบจำลองในกาทดสอบ
    return [
        'title' => rtrim($faker->sentence(rand(5,10)),"."),
        'body' => $faker->paragraphs(rand(3,7),true),
        'views' => rand(0,10),
        'answer' => rand(0,10),
        'votes' => rand(-3,10)
    ];
});
