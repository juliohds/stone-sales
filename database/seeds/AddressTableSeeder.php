<?php

use Illuminate\Database\Seeder;
use App\Address;

class AddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {           
        for ($i=1; $i < 10; $i++) { 
            
            $address = new Address;
            $address->street = "Street ".$i."";
            $address->number = "1".$i;
            $address->neighborhood = "Neighborhood ".$i."";
            $address->complement = "Complement ".$i."";
            $address->city = "City ".$i."";
            $address->state = "State ".$i."";
            $address->country = "Zip Code ".$i."";
            $address->zip_code = "Complement ".$i."";
            $address->customer_id = $i;
            $address->save();
        
        }
        
    }
}



