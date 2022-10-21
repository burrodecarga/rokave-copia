<?php

use Illuminate\Database\Seeder;
use App\GastoComun;

class GastoComunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(GastoComun::class,3000)->create();
    }
}
