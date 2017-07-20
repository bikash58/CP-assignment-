<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Product;
use App\Category;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        $category = Category::all();
        return view('home',['product'=>$product,'category'=>$category]);
    }

    public function fetchDetails() {
        //currently logged in user id
        $id = auth()->user()->id;

        $data = User::find($id);
                
        return view('update', ['userObj'=>$data]);
    }

    public function about() {
        return view('about_us');
    }

    public function faq() {
        return view('faq');
    }

    public function blog() {
        return view('blog');
    }

    public function contact() {
        return view('contact');
    }

    public function np(){
        return view('nepali');
    }

}
