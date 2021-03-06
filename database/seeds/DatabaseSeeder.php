<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('CategoryTableSeeder');
        $this->call('ProductTableSeeder');
        $this->call('CustomerTableSeeder');
        $this->call('AddressTableSeeder');
        $this->call('SalesTableSeeder');
        $this->call('FreightsTableSeeder');
    }
}


