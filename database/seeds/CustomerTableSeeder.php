<?php

use Illuminate\Database\Seeder;
Use App\Customer;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Customer::class, 10)->create();
    }
}
