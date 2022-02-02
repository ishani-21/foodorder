<?php

namespace App\Repositories;

use App\Contracts\ChangePasswordContract;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ChangePasswordRepository implements ChangePasswordContract
{
	public function changepassword(array $array)
	{
		$user=auth()->user();
        if(Hash::check($array['current_password'], $user['password']))
        {
            $user->password=Hash::make($array['password']);
            $user->save();
			return $user;
		}
	}
}

?>