<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

	protected $fillable = [
	 'role_type',
	];
    
    // relationship
	public function users() {
		return $this->belongsToMany(User::class);
	}

}
