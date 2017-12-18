<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =[
    		'product_name','product_model','product_price','product_img_url',
    		'product_3D_url',

    ];

    public function brand()
    {
    	return $this->hasMany('App\Brand');
    }

    public function category()
    {
    	return $this->hasMany('App\Category');
    }

    

}
