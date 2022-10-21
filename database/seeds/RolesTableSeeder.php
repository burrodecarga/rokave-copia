<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;


class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'slug' =>'master',
            'name' =>'master',
          ]);

          Role::create([
         'slug' =>'suspendido',
         'name' =>'suspendido',
         ]);

        $role=Role::create([
         'slug' =>'admin',
         'name' =>'admin',
        ]);

        Role::create([
            'slug' =>'presidente',
            'name' =>'presidente',
        ]);

        Role::create([
            'slug' =>'tesorero',
            'name' =>'tesorero',
        ]);

        Role::create([
            'slug' =>'secretario',
            'name' =>'secretario',
        ]);

        Role::create([
            'slug' =>'vocero',
            'name' =>'vocero',
        ]);

        Role::create([
            'slug' =>'usuario',
            'name' =>'usuario',
        ]);

        Role::create([
            'slug' =>'visistante',
            'name' =>'visistante',
        ]);
    }
}
