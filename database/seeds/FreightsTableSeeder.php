<?php

use Illuminate\Database\Seeder;
use App\Freight;

class FreightsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        for ($i=1; $i < 10; $i++) { 
            
            $freight = new Freight();
            $freight->day = $i;
            $freight->price = $i*2;
            $freight->sale_id = $i;
            $freight->save();
        
        }
    }
}
