<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=User::create([
            'name'  =>'Edwin Henriquez',
            'email' =>'ed@gmail.com',
            'password'=>bcrypt('123'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10)
        ]);

        //$user->assignRole(1);

        $user=User::create([
           'name'  =>'admin admin',
           'email' =>'admin@gmail.com',
           'password'=>bcrypt('123'),
           'email_verified_at' => now(),
           'remember_token' => Str::random(10)
       ]);

        factory(App\User::class,80)->create();
    }
}
