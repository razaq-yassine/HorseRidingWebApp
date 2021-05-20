<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

// imports


class GuestController extends Controller
{
    public function login(request $request){
//        return response()->json([
//            'Success' => true,
//            'id' => 17,
//            'Name_User' => "Ahmed",
//            'email' => request('email'),
//            'password' => request('password'),
//            'Type_User' => 1,
//        ]);
        $user = User::findByEmail(request('email'));
        // cheking credentials
        if(!Hash::check(request('password'), $user->password)){
            return response()->json([
                'Success' => "false",
            ]);
        }
        else{

            return response()->json([
                'Success' => "true",
                'id' => $user->id_User,
                'Name_User' => $user->Name_User,
                'email' => $user->Email_User,
                'password' => request('password'),
                'Type_User' => $user->Type_User,
            ]);
//            return back()->withErrors([
//                'email' => 'Désole, adresse électronique ou mot de passe non valide.',
//            ]);
        }
    }
    public function register(Request $request){
        $data = [
            "Name_User" => $request->get("name"),
            "Email_User" => $request->get("email"),
            "password" => bcrypt($request->get("password")),
            "Type_User" => $request->get("type"),
        ];

        $user = User::create($data);
        $saved =  $user->save();
        return response()->json([
            'Success' => $saved,
        ]);

    }
}
