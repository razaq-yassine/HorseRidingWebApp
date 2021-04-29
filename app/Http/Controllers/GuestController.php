<?php

namespace App\Http\Controllers;

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
            return redirect('/Admin');
        }
        else{
            return back()->withErrors([
                'email' => 'Désole, adresse électronique ou mot de passe non valide.',
            ]);
        }
    }
    public function register(Request $request){
        request()->validate([
            'email' => 'required|email|exists:users,Email_User',
            'password' => 'required',
        ]);
        $data = [
            "Name_User" => $request->input("name"),
            "Email_User" => $request->input("email"),
            "password" => bcrypt($request->input("password")),
            "Type_User" => $request->input("type"),
        ];
        $user = User::create($data);
        $saved =  $user->save();
        return response()->json([
            'Success' => $saved,
        ]);

    }
}
