<?php

use Illuminate\Database\Seeder;

class DepositosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Deposito::class, 30)->create();
    }
}
