<?php

namespace App\Http\Controllers;

use App\Repository\UserRepository;

use App\User;
use http\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{
    public function editUserPic(Request $request){
        $request->validate([
            "uploaded_file" => "required",
            "extension" => "required",
            "id_User" => "required",
        ]);
        $data = [
            'uploaded_file' => $request->input('uploaded_file'),
            "extension" => $request->input("extension"),
        ];
        // Sending data to our repository
        $success = UserRepository::updateUserPic($request->input('id_User'), $data);
        // returning results
        //return back()->with('Success', $status);
        return response()->json([
            'Success' => $success
        ]);
    }
    public function editUser(Request $request)
    {

        $request->validate([
            'id' => 'required',
            'Name_User' => 'required',
            'Email_User' => "required"
        ]);

        $data = [
            'Name_User' => $request->input('Name_User'),
            'Email_User' => $request->input('Email_User')
        ];

        // Sending data to our repository
        $success = UserRepository::updateUser($request->input('id'), $data);
        // returning results
        //return back()->with('Success', $status);
        return response()->json([
            'Success' => $success
        ]);

    }
    public function getClient(Request $request){
        $user = User::find($request->input("id_User"));
        if ($user==null){
            return response()->json([
                'Success' => "false",
                'error' => "user not found"
            ]);
        }
        $client =$user->getClient();

        if ($client!=null){
            return response()->json([
               'Success' => "true",
               "client" => $client
            ]);
        }
        return response()->json([
            'Success' => "false",
        ]);

    }
    public function editPass(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'Current' => 'required',
            'New' => 'required'
        ]);

        return response()->json([
            'Success' => UserRepository::updatePass(request('id'), request('Current'), request('New'))
        ]);
    }
}
