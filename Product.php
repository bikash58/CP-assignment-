<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    // only these fileds will be filled used $guarded = []; for exclusion
    protected $fillable = [
    'name', 'sku', 'price', 'thumbnail_url', 'product_url', 'created_at', 'updated_at',
    ];

    // relationships with other model
    public function category() {
    	return $this->belongsToMany(Category::class, 'product_details', 'category_id');
    }

    public function subCategory() {
    	return $this->belongsTo(SubCategory::class, 'product_details');
    }

    public function productAttributeType() {
        return $this->belongsToMany('App\ProductAttributeType', 'product_attribute', 'product_attribute_type_id');
    }

    public function productAttribute(){
        return $this->belongsToMany('App\ProductAttributeType', 'product_attributes', 'value')->withPivot('value');
    }
    public function scopeSearch($query, $s){
        return $query->where('name','like','%' .$s.'%')
                        ->orwhere('other_details','like','%'.$s.'%');
    }

}
