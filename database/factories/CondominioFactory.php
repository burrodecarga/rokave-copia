<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Condominio;
use Faker\Generator as Faker;

$factory->define(Condominio::class, function (Faker $faker) {
    return [
        'condominio'=>$faker->sentence,
        'rut'=>$faker->sentence,
        'direccion'=>$faker->sentence,
        'telefonos'=>$faker->sentence,
        'correo'=>$faker->sentence,
        'user_id'=>1,
        'administrador'=>'administrador',

    ];
});
