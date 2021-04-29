<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// imports
use App\Repository\MonitorRepository;

class MonitorController extends Controller
{
    // controller functions
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
	public function editSessionClient(Request $request)
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
		$success = RepositoryName::updateSessionClient($request->input('id'), $data);
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
