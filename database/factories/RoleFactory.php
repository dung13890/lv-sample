<?php

use Faker\Generator as Faker;

$factory->define(App\Eloquent\Role::class, function (Faker $faker) {
    return [
        'title' => 'Phóng viên',
        'alias' => 'author',
        'permissions' => [
            'post.create' => true,
        ],
    ];
});
