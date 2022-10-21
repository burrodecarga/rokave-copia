<?php

use Illuminate\Database\Seeder;
use App\GastoParticular;

class GastoParticularSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(GastoParticular::class,1000)->create();
    }
}
