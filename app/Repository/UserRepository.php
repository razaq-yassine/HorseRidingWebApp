<?php

namespace App\Repository;


use App\User;
use Illuminate\Http\Request;
// imports

class UserRepository
{

	public static function updateUser($id_Admin,$data)
	{

		try {
		$admin = User::find($id_Admin);
		$admin->update($data);
		$saved =$admin->save();
		return $saved;
		} catch (\Exception $e) {
		report($e);
		return false;
		}

	}
}
