<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Cart;
use App\Product;

class CartController extends Controller
{
    
	public function index() {
			
		if(!Session::has('cart')){
			return view('customer.cart',['products'=>null]);
		} else {
			$oldCart=Session::get('cart');
			$cart=new Cart($oldCart);
			
			
			 return view('Customer.cart',['products'=>$cart->items,'totalPrice'=>$cart->totalPrice]);
		}
	}

}
