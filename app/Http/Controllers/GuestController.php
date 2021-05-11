<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// imports


class GuestController extends Controller
{
    public function login(request $request){
        return response()->json([
            'Success' => "true",
            'email' => request('password'),
            'password' => request('email'),
        ]);

        // cheking credentials
        if(Auth::attempt(['Email_User' => request('email'), 'password' => request('password')])){
            return response()->json([
                'Success' => "true",
            ]);
        }
        else{
            return response()->json([
                'Success' => "false",
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
