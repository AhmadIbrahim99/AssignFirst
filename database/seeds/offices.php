<?php

use Illuminate\Database\Seeder;

class offices extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ofc = factory(App\Office::class, 10)->create();
        return $ofc;
    }
}
