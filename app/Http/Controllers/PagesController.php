<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function init(){
    	return view('shop');
    }

    public function login(){
    	return view('login');
    }

    public function notFound(){
    	return view('shared.404');
    }
}
