<?php

namespace App\Repository;


use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

// imports

class UserRepository
{

    public static function updateUserPic($id_User, $data){
        return true;
        try {
            $admin = User::find($id_User);
            $admin->update($data);
            $saved =$admin->save();
            return $saved;
        } catch (\Exception $e) {
            report($e);
            return false;
        }

    }
	public static function updateUser($id_User,$data)
	{

		try {
		$admin = User::find($id_User);
		$admin->update($data);
		$saved =$admin->save();
		return $saved;
		} catch (\Exception $e) {
		report($e);
		return false;
		}

	}
	public static function updatePass($id, $current, $new){
        $user = User::find($id);
        // checking current pass
        if(Hash::check($current, $user->password)){
            $user->update([
                'password' => bcrypt($new)
            ]);
            $saved = $user->save();
            return $saved;
        }
        return false;
    }
}
