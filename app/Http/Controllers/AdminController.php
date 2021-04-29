<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// imports
use App\Repository\AdminRepository;

class AdminController extends Controller
{
    // controller functions
	public function addClient(Request $request)
	{
		
		$request->validate([
			'Id_User' => 'required',
		]);
		
		$data = [
			'Id_User' => $request->input('Id_User'),
		];
		
		// Sending data to our repository
		$success = RepositoryName::createNewClient($data);
		// returning results
		//return back()->with('Success', $status);
		return response()->json([
		'Success' => $success
		]);
		
	}
	public function editClient(Request $request)
	{
		
		$request->validate([
			'Id_User' => 'required',
		]);
		
		$data = [
			'Id_User' => $request->input('Id_User'),
		];
		
		// Sending data to our repository
		$success = RepositoryName::updateClient($request->input('id'), $data);
		// returning results
		//return back()->with('Success', $status);
		return response()->json([
		'Success' => $success
		]);
		
	}
	public function deleteClient(Request $request)
	{
		
		// Sending request to our repository
		$success = RepositoryName::deleteClient($request->input('id'));
		// returning results
		//return back()->with('Success', $status);
		return response()->json([
		'Success' => $success
		]);
		
	}
	public function addSubscription(Request $request)
	{
		
		$request->validate([
			'Name' => 'required',
			'Price' => 'required',
		]);
		
		$data = [
			'Name_Subscription' => $request->input('Name'),
			'Price_Subsciption' => $request->input('Price'),
		];
		
		// Sending data to our repository
		$success = RepositoryName::createNewSubscription($data);
		// returning results
		//return back()->with('Success', $status);
		return response()->json([
		'Success' => $success
		]);
		
	}
	public function editSubscription(Request $request)
	{
		
		$request->validate([
			'Name' => 'required',
			'Price' => 'required',
		]);
		
		$data = [
			'Name_Subscription' => $request->input('Name'),
			'Price_Subsciption' => $request->input('Price'),
		];
		
		// Sending data to our repository
		$success = RepositoryName::updateSubscription($request->input('id'), $data);
		// returning results
		//return back()->with('Success', $status);
		return response()->json([
		'Success' => $success
		]);
		
	}
	public function deleteSubscription(Request $request)
	{
		
		// Sending request to our repository
		$success = RepositoryName::deleteSubscription($request->input('id'));
		// returning results
		//return back()->with('Success', $status);
		return response()->json([
		'Success' => $success
		]);
		
	}
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
	public function editSubClient(Request $request)
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
		$success = RepositoryName::updateSubClient($request->input('id'), $data);
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
	public function addSession(Request $request)
	{
		
		$request->validate([
			'Id_Monitor' => 'required',
		]);
		
		$data = [
			'Id_Monitor' => $request->input('Id_Monitor'),
			'Name_Session' => null,
			'Price_Session' => null,
			'Date_Session' => null,
		];
		
		// Sending data to our repository
		$success = RepositoryName::createNewSession($data);
		// returning results
		//return back()->with('Success', $status);
		return response()->json([
		'Success' => $success
		]);
		
	}
	public function editSession(Request $request)
	{
		
		$request->validate([
			'Id_Monitor' => 'required',
		]);
		
		$data = [
			'Id_Monitor' => $request->input('Id_Monitor'),
			'Name_Session' => null,
			'Price_Session' => null,
			'Date_Session' => null,
		];
		
		// Sending data to our repository
		$success = RepositoryName::updateSession($request->input('id'), $data);
		// returning results
		//return back()->with('Success', $status);
		return response()->json([
		'Success' => $success
		]);
		
	}
	public function deleteSession(Request $request)
	{
		
		// Sending request to our repository
		$success = RepositoryName::deleteSession($request->input('id'));
		// returning results
		//return back()->with('Success', $status);
		return response()->json([
		'Success' => $success
		]);
		
	}
	public function addEmployee(Request $request)
	{
		
		$request->validate([
		
		]);
		
		$data = [
			'Salary_Employee' => null,
			'Role_Employee' => null,
		];
		
		// Sending data to our repository
		$success = RepositoryName::createNewEmployee($data);
		// returning results
		//return back()->with('Success', $status);
		return response()->json([
		'Success' => $success
		]);
		
	}
	public function editEmployee(Request $request)
	{
		
		$request->validate([
		
		]);
		
		$data = [
			'Salary_Employee' => null,
			'Role_Employee' => null,
		];
		
		// Sending data to our repository
		$success = RepositoryName::updateEmployee($request->input('id'), $data);
		// returning results
		//return back()->with('Success', $status);
		return response()->json([
		'Success' => $success
		]);
		
	}
	public function deleteEmployee(Request $request)
	{
		
		// Sending request to our repository
		$success = RepositoryName::deleteEmployee($request->input('id'));
		// returning results
		//return back()->with('Success', $status);
		return response()->json([
		'Success' => $success
		]);
		
	}
	public function addMonitor(Request $request)
	{
		
		$request->validate([
			'Id_Employee' => 'required',
		]);
		
		$data = [
			'Id_Employee' => $request->input('Id_Employee'),
		];
		
		// Sending data to our repository
		$success = RepositoryName::createNewMonitor($data);
		// returning results
		//return back()->with('Success', $status);
		return response()->json([
		'Success' => $success
		]);
		
	}
	public function editMonitor(Request $request)
	{
		
		$request->validate([
			'Id_Employee' => 'required',
		]);
		
		$data = [
			'Id_Employee' => $request->input('Id_Employee'),
		];
		
		// Sending data to our repository
		$success = RepositoryName::updateMonitor($request->input('id'), $data);
		// returning results
		//return back()->with('Success', $status);
		return response()->json([
		'Success' => $success
		]);
		
	}
	public function deleteMonitor(Request $request)
	{
		
		// Sending request to our repository
		$success = RepositoryName::deleteMonitor($request->input('id'));
		// returning results
		//return back()->with('Success', $status);
		return response()->json([
		'Success' => $success
		]);
		
	}
	public function addAdmin(Request $request)
	{
		
		$request->validate([
			'Id_User' => 'required',
		]);
		
		$data = [
			'Id_User' => $request->input('Id_User'),
		];
		
		// Sending data to our repository
		$success = RepositoryName::createNewAdmin($data);
		// returning results
		//return back()->with('Success', $status);
		return response()->json([
		'Success' => $success
		]);
		
	}
	public function editAdmin(Request $request)
	{
		
		$request->validate([
			'Id_User' => 'required',
		]);
		
		$data = [
			'Id_User' => $request->input('Id_User'),
		];
		
		// Sending data to our repository
		$success = RepositoryName::updateAdmin($request->input('id'), $data);
		// returning results
		//return back()->with('Success', $status);
		return response()->json([
		'Success' => $success
		]);
		
	}
	public function deleteAdmin(Request $request)
	{
		
		// Sending request to our repository
		$success = RepositoryName::deleteAdmin($request->input('id'));
		// returning results
		//return back()->with('Success', $status);
		return response()->json([
		'Success' => $success
		]);
		
	}
	public function addTask(Request $request)
	{
		
		$request->validate([
			'Name' => 'required',
			'Date' => 'required',
		]);
		
		$data = [
			'Name_Task' => $request->input('Name'),
			'Date_Task' => $request->input('Date'),
		];
		
		// Sending data to our repository
		$success = RepositoryName::createNewTask($data);
		// returning results
		//return back()->with('Success', $status);
		return response()->json([
		'Success' => $success
		]);
		
	}
	public function editTask(Request $request)
	{
		
		$request->validate([
			'Name' => 'required',
			'Date' => 'required',
		]);
		
		$data = [
			'Name_Task' => $request->input('Name'),
			'Date_Task' => $request->input('Date'),
		];
		
		// Sending data to our repository
		$success = RepositoryName::updateTask($request->input('id'), $data);
		// returning results
		//return back()->with('Success', $status);
		return response()->json([
		'Success' => $success
		]);
		
	}
	public function deleteTask(Request $request)
	{
		
		// Sending request to our repository
		$success = RepositoryName::deleteTask($request->input('id'));
		// returning results
		//return back()->with('Success', $status);
		return response()->json([
		'Success' => $success
		]);
		
	}
	public function addEmployeeTask(Request $request)
	{
		
		$request->validate([
			'Id_Employee' => 'required',
			'Id_Task' => 'required',
		]);
		
		$data = [
			'Id_Employee' => $request->input('Id_Employee'),
			'Id_Task' => $request->input('Id_Task'),
		];
		
		// Sending data to our repository
		$success = RepositoryName::createNewEmployeeTask($data);
		// returning results
		//return back()->with('Success', $status);
		return response()->json([
		'Success' => $success
		]);
		
	}
	public function editEmployeeTask(Request $request)
	{
		
		$request->validate([
			'Id_Employee' => 'required',
			'Id_Task' => 'required',
		]);
		
		$data = [
			'Id_Employee' => $request->input('Id_Employee'),
			'Id_Task' => $request->input('Id_Task'),
		];
		
		// Sending data to our repository
		$success = RepositoryName::updateEmployeeTask($request->input('id'), $data);
		// returning results
		//return back()->with('Success', $status);
		return response()->json([
		'Success' => $success
		]);
		
	}
	public function deleteEmployeeTask(Request $request)
	{
		
		// Sending request to our repository
		$success = RepositoryName::deleteEmployeeTask($request->input('id'));
		// returning results
		//return back()->with('Success', $status);
		return response()->json([
		'Success' => $success
		]);
		
	}
}
