<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// imports
use App\Repository\ClientRepository;

class ClientController extends Controller
{
    // controller functions
	public function addSubClient(Request $request)
	{

		$request->validate([
			'Id_Subscription' => 'required',
			'Id_Client' => 'required',
			'IsPayed' => 'required',
		]);

		$data = [
			'Id_Subscription' => $request->input('Id_Subscription'),
			'Id_Client' => $request->input('Id_Client'),
			'IsPayed_SubClient' => $request->input('IsPayed'),
		];

		// Sending data to our repository
		$success = RepositoryName::createNewSubClient($data);
		// returning results
		//return back()->with('Success', $status);
		return response()->json([
		'Success' => $success
		]);

	}
	public function deleteSubClient(Request $request)
	{

		// Sending request to our repository
		$success = RepositoryName::deleteSubClient($request->input('id'));
		// returning results
		//return back()->with('Success', $status);
		return response()->json([
		'Success' => $success
		]);

	}
	public function addSessionClient(Request $request)
	{

		$request->validate([
			'Id_Session' => 'required',
			'Id_Client' => 'required',
			'IsPayed' => 'required',
			'IsPresent' => 'required',
		]);

		$data = [
			'Id_Session' => $request->input('Id_Session'),
			'Id_Client' => $request->input('Id_Client'),
			'IsPayed_SessionClient' => $request->input('IsPayed'),
			'IsPresent_SessionClient' => $request->input('IsPresent'),
		];

		// Sending data to our repository
		$success = RepositoryName::createNewSessionClient($data);
		// returning results
		//return back()->with('Success', $status);
		return response()->json([
		'Success' => $success
		]);

	}
	public function deleteSessionClient(Request $request)
	{

		// Sending request to our repository
		$success = RepositoryName::deleteSessionClient($request->input('id'));
		// returning results
		//return back()->with('Success', $status);
		return response()->json([
		'Success' => $success
		]);

	}
}