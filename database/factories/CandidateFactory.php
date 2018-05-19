<?php

use Faker\Generator as Faker;

$factory->define(ReclutaTI\Candidate::class, function (Faker $faker) {
    return [
        'user_id' => factory(\ReclutaTI\User::class)->create(['user_group_id' => 1])->id,
        'last_name' => $faker->lastName
    ];
});
