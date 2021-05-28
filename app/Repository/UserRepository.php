<?php

namespace App\Repository;


use App\Image;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

// imports

class UserRepository
{

    public static function updateUserPic($id_User, $data){
        try {
            $user = User::find($id_User);
            // uploading file to storage
            $image = base64_decode($data["uploaded_file"]);
            $imageName = str_replace(' ', "_",$user->Name_User)."_".$user->id_User.".".strtolower($data["extension"]);
            $destination = "Users/";
            Image::delete(str_replace("storage/", "", $user->Img_User));
            Image::upload($destination, $imageName, $image);
            $user->update([
                "Img_User" => "storage/".$destination .$imageName,
            ]);
            $saved =$user->save();
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
