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
        // $this->call(UsersTableSeeder::class);
        $this->call(costumers::class);
        $this->call(employees::class);
        $this->call(offices::class);
        $this->call(order::class);
        $this->call(order_products::class);
        $this->call(payments::class);
        $this->call(productLine::class);
        $this->call(products::class);

    }
}
