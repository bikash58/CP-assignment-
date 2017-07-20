<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductAttributeType extends Model
{

    protected $fillable = [
    'attribute_type'
    ];

    // relationships
    public function product() {
    	return $this->belongsToMany('App\Product', 'product_attributes', 'value');
    }

}
