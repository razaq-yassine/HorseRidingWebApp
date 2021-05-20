<?php

namespace App\Http\Controllers;

use App\Repository\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
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