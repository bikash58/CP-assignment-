<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = [
		'sub_cat_type',
	];

    public function category() {
    	return $this->belongsToMany(Category::class, 'product_details');
    }

    public function product() {
    	return $this->hasMany(Product::class);
    }
}
