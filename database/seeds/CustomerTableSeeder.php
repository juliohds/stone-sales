<?php

use Illuminate\Database\Seeder;
use App\Customer;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {           
        for ($i=1; $i < 10; $i++) { 
            
            $customer = new Customer;
            $customer->name = "Customer ".$i."";
            $customer->age = $i;
            $customer->picture = "http://compracanada.com/wp-content/uploads/2018/02/img-adicione-seu-produto.jpg";
            $customer->cell_phone = "11 9999-999".$i."";
            $customer->cpf = "9999999984".$i."";
            $customer->rg = "999999994".$i."";
            $customer->save();
        
        }
        
    }
}

