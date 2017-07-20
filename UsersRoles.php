<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersRoles extends Model
{
    protected $fillable = [
        'fk_use_id','fk_role_id',
    ];

    public function insertNew($userId, $roleId) {
    	
    }
}