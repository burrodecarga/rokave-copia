<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Movimiento;
use Faker\Generator as Faker;

$factory->define(Movimiento::class, function (Faker $faker) {
    $tipo=['ingreso','egreso'];
    return [
       'fecha'=>$faker->dateTimeBetween('-1 years','now'),
       'tipo'=>$faker->randomElement(['ingreso', 'egreso']),
       'monto'=>rand(5000,10000),
       'referencia'=>$faker->phoneNumber,
       'descripcion'=>$faker->sentence(30),
       'condominio_id'=>1,
       'apartamento_id'=>rand(1,20),
       'banco_id'=>rand(1,5),
    ];
});
