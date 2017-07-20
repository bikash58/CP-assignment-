<?php

namespace App\Http\Controllers\Vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use DB;
use App\User;

class UpdateController extends Controller
{
    // update vendor's detail
	public function update() {

		$value = Input::all();
		$user = User::find(auth()->user()->id);

		$user->name = $value['name'];
		$user->address = $value['address'];
		$user->mobile = $value['mobile'];
		$user->landline = $value['landline'];

		$status = $user->save();

		if ($status) {
			return redirect()->route('update', ['state'=>'true']);
		}
		
		return redirect()->route('update', ['state'=>'false']);
	}

}
