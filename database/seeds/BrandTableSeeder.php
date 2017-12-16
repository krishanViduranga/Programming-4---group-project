<?php

use Illuminate\Database\Seeder;
use App\Brand;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Brand::create([
       		'brand_name'=>'ANJUN',
       ]);

       Brand::create([
       		'brand_name'=>'KIA',
       ]);

       Brand::create([
       		'brand_name'=>'HYUNDAI',
       ]);

       Brand::create([
       		'brand_name'=>'KCW',
       ]);

       Brand::create([
       		'brand_name'=>'SANGSIN',
       ]);

       Brand::create([
       		'brand_name'=>'BOSCH',
       ]);

       Brand::create([
       		'brand_name'=>'INFAC',
       ]);
    }
}
