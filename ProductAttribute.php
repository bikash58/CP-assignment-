<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
	
    protected $fillable = [
    	'product_id', 'product_attribute_type_id', 'value',
    ];

    protected $table = 'product_attributes';

    public function product() {
    	return $this->belongsToMany('App\Products', 'product_attributes')->withPivot('value');
    }

}
