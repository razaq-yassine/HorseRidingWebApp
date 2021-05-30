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

        $user = User::findByEmail(request('email'));
        // cheking credentials
        if(!Hash::check(request('password'), $user->password)){
            return response()->json([
                'Success' => "false",
            ]);
        }
        else{
            $userArr = $user->toArray();
            switch ($user->Type_User){
                // client
                case 1:
                    $userArr = array_merge($userArr, ["client"=> $user->getClient()]);
                    break;
                // admin
                case -99:
                    $userArr = array_merge($userArr, ['admin'=> $user->getAdmin()]);
                    break;
                // monitor
                case -1:
                    $emplyee = $user->getEmployee();
                    $emplyeeArr = $emplyee->toArray();
                    $emplyeeArr = array_merge($emplyeeArr, ["monitor"=> $emplyee->getMonitor()]);
                    $userArr = array_merge($userArr, ['employee'=> $emplyeeArr]);
                    break;
                // employee
                case -2:
                    $userArr = array_merge($userArr, ['employee'=> $user->getEmployee()]);
                    break;

            }
            return response()->json([
                'Success' => "true",
                'user' => $userArr,
            ]);
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
