<?php

namespace App\Http\Controllers\Vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\SubCategory;

class ProductController extends Controller
{
    
	public function loadProductView() {
		$cat = Category::all();
		$sub = SubCategory::all();

		return view('vendor.additem',['cat'=>$cat,'sub'=>$sub]);
	}
	
	

}
