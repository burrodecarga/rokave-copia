<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Apartamento;
use Faker\Generator as Faker;

$factory->define(Apartamento::class, function (Faker $faker) {

    return [
        'condominio_id'=>1,
        'user_id'=>rand(1,20),
        'apartamento'=>$faker->sentence(2),
        'condominio'=>'Condominio 1',
        'propietario'=>$faker->name,
        'rut'=>$faker->sentence,
        'direccion'=>$faker->address,
        'telefonos'=>$faker->phoneNumber,
        'correo'=>$faker->unique()->safeEmail,
        'twitter'=>$faker->Email,
        'facebook'=>$faker->Email,
        'instagram'=>$faker->Email,
        'alicuota'=>rand(1,9)*0.0375,
    ];
});
