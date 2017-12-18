<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
        	'brand_id'=>'1',
        	'category_id'=>'1',
        	'product_name'=>'Easy Polo Black Edition',
        	'product_model'=>'Black',
        	'product_price'=>'23450LKR',

        ]);

        Product::create([
        	'brand_id'=>'2',
        	'category_id'=>'2',
        	'product_name'=>'needle roller',
        	'product_model'=>'White',
        	'product_price'=>'500LKR',

        ]);

        Product::create([
        	'brand_id'=>'3',
        	'category_id'=>'3',
        	'product_name'=>'FAN BELT',
        	'product_model'=>'Long',
        	'product_price'=>'440LKR',

        ]);

        
    }
}
