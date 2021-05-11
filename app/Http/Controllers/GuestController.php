<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// imports


class GuestController extends Controller
{
    public function login(request $request){
        request()->validate([
            'email' => 'required|email|exists:users,Email_User',
            'password' => 'required',
        ],[
            'email.required' => "Désole l'adresse mail est obligatoire",
            'email.email' => "Désole le format de l'adresse mail est invalide.",
            'email.exists' => "Désole, adresse électronique ou mot de passe non valide.",
            'password.required' => "Désole le mot de passe est obligatoire",
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
        request()->validate([
            'email' => 'required|email|exists:users,Email_User',
            'password' => 'required',
        ]);
        $data = [
            "Name_User" => $request->post("name"),
            "Email_User" => $request->post("email"),
            "password" => bcrypt($request->post("password")),
            "Type_User" => $request->post("type"),
        ];
        return response()->json([
            'Success' => $data,
        ]);

        $user = User::create($data);
        $saved =  $user->save();
        return response()->json([
            'Success' => $data,
        ]);

    }
}
