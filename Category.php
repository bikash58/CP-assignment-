<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function product() {
    	return $this->hasMany(Product::class, 'product_details');
    }

    public function subCategory() {
    	return $this->belongsToMany(SubCategory::class, 'product_details');
    }
    
}
