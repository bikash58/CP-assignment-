<?php

namespace App\Http\Controllers\Vendor;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Auth;
use App\Product;
use App\Image;


class UploadController extends Controller
{

    // method to store all the data in database for vendor image uploads
    public function store(Request $request) {
        // check whether there is image or not
    	if($request->hasFile('image')) {
    		$id = Auth::user()->id;
    		$imageName = $request->file('image')->hashName();
            $a = [];
            $year = date('Y'); $month = date('m'); $day = date('d');

            // define the path for the image
            $pathStructure = 'public/' . $year . '/' . $month . '/' . $day;

            Storage::putFile($pathStructure, $request->file('image'));

            $imageUrl = 'storage/'.$year.'/'.$month.'/'.$day.'/'.$imageName;

            // prepare product information to insert
            $product = new Product();
            $product->name = $request->input('product_name');
            $product->price = $request->input('product_price');
            $product->thumbnail_url = $imageUrl;
            $trimedProductDetail = ltrim(rtrim($request->input('product_details')));
            $product->other_details = $trimedProductDetail;
            $product->brand_id = 1;
             $product->categories_id = $request->input('product_category');
            
            // product sku
            $trimedProductSku = ltrim(rtrim($request->input('product_sku')));
            $product->sku = $trimedProductSku;

            //generate and set product url
            $trimedProductName = ltrim(rtrim($request->input('product_name')));
            $productUrl = '/product/'. str_replace(' ', '_' , $trimedProductSku) . '/' . str_replace(' ', '_' , $trimedProductName);
            $product->product_url = $productUrl;

            $product->save();

            // Image table
            foreach ($request->file() as $key=>$value) {
                // first generate an url for the image
                $imageUrl = 'storage/'.$year.'/'.$month.'/'.$day.'/'.$request->file($key)->hashName();
                
                // store the image to the desired path
                Storage::putFile($pathStructure, $request->file($key));

                // insert the image path into the database
                Image::create(['image_url'=>$imageUrl, 'product_id'=>$product->id]);
            }

            // insert into pivot table of category and sub category
            $product->category()->save($product, ['product_id'=>$product->id,'category_id'=>$request->product_category,'sub_category_id'=>$request->product_sub_category]);

            // fetch all rows from product attribute types
            $attributes = DB::table('product_attribute_types')->get();

            //iterate through each attribute and isnert value accordingly
            foreach ($attributes as $attribute) {
                
                $attributeName = $attribute->attribute_type;
                $attributeId = $attribute->id;
                
                // user input
                $value = $request->input($attributeName);

                if($request->input($attributeName)) {
                    array_push($a, $attributeName .' => ' . $attribute->id);
                    $product->productAttribute()->attach(1,['product_id'=>$product->id,'product_attribute_type_id'=>$attributeId,'value'=>$value,'created_at'=>date('Y-m-d'),'updated_at'=>date('Y-m-d')]);
                }

            }

        }

    }

    public function show() {
    	$files = Storage::files('public/'.Auth::user()->id);

    	foreach ($files as $file) {
    		echo "<a href=\"".str_replace("","",$file)."\">asdasD</a>";
    	}

    	dd($files);
    }

}
