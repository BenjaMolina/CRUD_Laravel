<?php

use Illuminate\Database\Seeder;

use App\Product;

class ProductsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        

        factory(Product::class,80)->create();
    }
}
