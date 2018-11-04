<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {           
        for ($i=0; $i < 10; $i++) { 
            
            $Product = new Product;
            $Product->title = "Product ".$i."";
            $Product->description = "Description ".$i."";;
            $Product->picture = "http://compracanada.com/wp-content/uploads/2018/02/img-adicione-seu-produto.jpg";
            $Product->category = 1;
            $Product->save();
        
        }
        
    }
}
