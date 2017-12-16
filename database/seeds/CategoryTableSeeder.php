<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([

        	'category_name'=>'EXHAUST TIPS',
		
		]);

		Category::create([

        	'category_name'=>'BUMPERS AND COMPONENTS',
		
		]);

		Category::create([

        	'category_name'=>'GRILLS AND COMPONENTS',
		
		]);

		Category::create([

        	'category_name'=>'BRAKE DISCS',
		
		]);

		Category::create([

        	'category_name'=>'CLIPERS',
		
		]);

		Category::create([

        	'category_name'=>'SHOCKS,STRUCTS',
		
		]);

		Category::create([

        	'category_name'=>'CAR COVERS',
		
		]);


		Category::create([

        	'category_name'=>'SEAT,SEAT COVERS',
		
		]);

		Category::create([

        	'category_name'=>'FLOOR MATS AND LINERS',
		
		]);

		
    }
}
