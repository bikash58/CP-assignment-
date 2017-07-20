<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded = [];

     protected $table = 'images';
     
     public function product() {
    	return $this->belongsToOne(Product::class,'product_id');
    }
}
