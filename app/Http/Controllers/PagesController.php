<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function init(){
    	return view('shop');
    }
    
    public function notFound(){
    	return view('shared.404');
    }

    public function contact(){
    	return view('shared.contact');
    }

    public function cart(){
    	return view('cart');
    }

    public function checkout(){
    	return view('checkout');
    }
}
