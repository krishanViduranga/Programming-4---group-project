<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    

    public function getAddToCart(Request $request,$id){
        $product= Product::find($id);

        $oldCart=Session::has('cart') ? Session::get('cart') : null;
        $cart=new Cart($oldCart);
        $cart->add($product,$product->id);

        $request->session()->put('cart',$cart);
        dd($request->session()->get('cart'));
        return redirect()->route('product.index');

    }
}
