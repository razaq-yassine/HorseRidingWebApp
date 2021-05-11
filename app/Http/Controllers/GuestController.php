<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// imports


class GuestController extends Controller
{
    public function login(request $request){
//        request()->validate([
//            'email' => 'required|email|exists:users,Email_User',
//            'password' => 'required',
//        ],[
//            'email.required' => "Désole l'adresse mail est obligatoire",
//            'email.email' => "Désole le format de l'adresse mail est invalide.",
//            'email.exists' => "Désole, adresse électronique ou mot de passe non valide.",
//            'password.required' => "Désole le mot de passe est obligatoire",
//        ]);

        // cheking credentials
        if(Auth::attempt(['Email_User' => $request->header("email"), 'password' => bcrypt($request->header("password"))])){
            return response()->json([
                'Success' => "true",
            ]);
        }
        else{
            return response()->json([
                'Success' => "false",
                "email" => $request->header("email"),
                "password" => $request->header("password"),
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
