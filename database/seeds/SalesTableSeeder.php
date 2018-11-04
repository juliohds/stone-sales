<?php

use Illuminate\Database\Seeder;
use App\Sales;

class SalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {           
        for ($i=1; $i < 15; $i++) { 
            
            $sales = new Sales;
            $sales->product_id = $i;
            
            if($i<5){
                $sales->customer_id = 1;
            }else if($i<10){
                $sales->customer_id = 2;   
            }else{
                $sales->customer_id = 3;   
            }

            $sales->save();

        }
        
    }
}

