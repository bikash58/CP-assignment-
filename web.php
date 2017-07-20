<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['uses'=>'HomeController@index']);

Auth::routes();

Route::get('/home', ['uses'=>'HomeController@index','as'=>'product.index'])->name('home');
Route::get('/category/{category}', ['uses'=>'ProductController@getAllProducts']);

Route::get('/update', 'HomeController@fetchDetails')->name('update');

Route::post('/update', 'Vendor\UpdateController@update');

Route::post('vendor/uploadimage', 'Vendor\UploadController@store');


Route::get('/billing', function() { return view('vendor.billing'); });

Route::get('/statistics', function() { return view('vendor.statistics'); });

Auth::routes();

Route::get('/terms', function () { return view('terms_of_service'); });

Route::get('/logout', function () { Auth::logout(); Session::flush(); return Redirect::to('/'); });

Route::get('/additem', ['uses'=>'Vendor\ProductController@loadProductView'])->name('additem')->middleware('auth');

// show product url
Route::get('/product/{sky}/{name}', ['uses'=>'ProductController@getItemDetail']);

// customer routing

Route::get('/customer/cart', ['uses'=>'Customer\CartController@index','as'=>'product.shoppingCart']);

Route::get('/customer/favorite', ['uses'=>'Customer\FavoriteController@index']);

// About us
Route::get('/about-us', ['uses'=>'HomeController@about']);
Route::get('/faq', ['uses'=>'HomeController@faq']);
Route::get('/blog', ['uses'=>'HomeController@blog']);
Route::get('/contact', ['as'=>'contact','uses'=>'HomeController@contact']);
Route::get('/nepali', ['as'=>'nepali','uses'=>'HomeController@np']);

// cart
Route::get('/add-to-cart/{id}',['uses'=>'ProductController@addToCart','as'=>'product.addtocart']);
Route::get('/search', ['uses'=>'ProductController@index','as'=>'category.index']);