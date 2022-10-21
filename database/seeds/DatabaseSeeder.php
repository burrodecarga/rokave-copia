<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call(UsersTableSeeder::class);
       $this->call(RolesTableSeeder::class);
       $this->call(PermisosTableSeeder::class);
       $this->call(CondominiosTableSeeder::class);
       $this->call(BancosTableSeeder::class);
       $this->call(ApartamentosTableSeeder::class);
       $this->call(SetUpTablesSeeder::class);
       $this->call(MovimientosTableSeeder::class);
       $this->call(GastoComunSeeder::class);
       $this->call(GastoParticularSeeder::class);

         }
}
