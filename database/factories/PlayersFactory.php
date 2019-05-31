<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Player::class, function (Faker $faker) {
    return [
        //Criado para popular o banco
        'name' => $faker->name,
        'age' => $faker->numberBetween($min = 18, $max = 30),
        'description' => $faker->text
    ];
});
