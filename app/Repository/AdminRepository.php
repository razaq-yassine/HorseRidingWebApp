<?php

namespace App\Repository;

use App\Client;
use App\Employee;
use App\Monitor;
use App\Session;
use App\SessionClient;
use App\SubClient;
use App\Subscription;
// imports

class AdminRepository
{
    // controller functions
	static public function createNewClient($data)
	{

		try {
		$client = Client::create($data);
		$saved = $client->save();
		return $saved;
		} catch (\Exception $e) {
		report($e);
		return false;
		}

	}
	public static function updateClient($id_Client,$data)
	{

		try {
		$client = Client::find($id_Client);
		$client->update($data);
		$saved =$client->save();
		return $saved;
		} catch (\Exception $e) {
		report($e);
		return false;
		}

	}
	public static function deleteClient($id_Client)
	{

		try{
		$deleted = Client::find($id_Client)->delete();
		return $deleted;
		} catch (\Exception $e) {
		report($e);
		return null;
		}

	}
	static public function createNewSubscription($data)
	{

		try {
		$subscription = Subscription::create($data);
		$saved = $subscription->save();
		return $saved;
		} catch (\Exception $e) {
		report($e);
		return false;
		}

	}
	public static function updateSubscription($id_Subscription,$data)
	{

		try {
		$subscription = Subscription::find($id_Subscription);
		$subscription->update($data);
		$saved =$subscription->save();
		return $saved;
		} catch (\Exception $e) {
		report($e);
		return false;
		}

	}
	public static function deleteSubscription($id_Subscription)
	{

		try{
		$deleted = Subscription::find($id_Subscription)->delete();
		return $deleted;
		} catch (\Exception $e) {
		report($e);
		return null;
		}

	}
	static public function createNewSubClient($data)
	{

		try {
		$subclient = SubClient::create($data);
		$saved = $subclient->save();
		return $saved;
		} catch (\Exception $e) {
		report($e);
		return false;
		}

	}
	public static function updateSubClient($id_SubClient,$data)
	{

		try {
		$subclient = SubClient::find($id_SubClient);
		$subclient->update($data);
		$saved =$subclient->save();
		return $saved;
		} catch (\Exception $e) {
		report($e);
		return false;
		}

	}
	public static function deleteSubClient($id_SubClient)
	{

		try{
		$deleted = SubClient::find($id_SubClient)->delete();
		return $deleted;
		} catch (\Exception $e) {
		report($e);
		return null;
		}

	}
	static public function createNewSessionClient($data)
	{

		try {
		$sessionclient = SessionClient::create($data);
		$saved = $sessionclient->save();
		return $saved;
		} catch (\Exception $e) {
		report($e);
		return false;
		}

	}
	public static function updateSessionClient($id_SessionClient,$data)
	{

		try {
		$sessionclient = SessionClient::find($id_SessionClient);
		$sessionclient->update($data);
		$saved =$sessionclient->save();
		return $saved;
		} catch (\Exception $e) {
		report($e);
		return false;
		}

	}
	public static function deleteSessionClient($id_SessionClient)
	{

		try{
		$deleted = SessionClient::find($id_SessionClient)->delete();
		return $deleted;
		} catch (\Exception $e) {
		report($e);
		return null;
		}

	}
	static public function createNewSession($data)
	{

		try {
		$session = Session::create($data);
		$saved = $session->save();
		return $saved;
		} catch (\Exception $e) {
		report($e);
		return false;
		}

	}
	public static function updateSession($id_Session,$data)
	{

        try {
            $session = Session::find($id_Session);
            $session->update($data);
            $saved =$session->save();
		return $saved;
		} catch (\Exception $e) {
		report($e);
		return false;
		}

	}
	public static function deleteSession($id_Session)
	{

		try{
		$deleted = Session::find($id_Session)->delete();
		return $deleted;
		} catch (\Exception $e) {
		report($e);
		return false;
		}

	}
	static public function createNewEmployee($data)
	{

		try {
		$employee = Employee::create($data);
		$saved = $employee->save();
		return $saved;
		} catch (\Exception $e) {
		report($e);
		return false;
		}

	}
	public static function updateEmployee($id_Employee,$data)
	{

		try {
		$employee = Employee::find($id_Employee);
		$employee->update($data);
		$saved =$employee->save();
		return $saved;
		} catch (\Exception $e) {
		report($e);
		return false;
		}

	}
	public static function deleteEmployee($id_Employee)
	{

		try{
		$deleted = Employee::find($id_Employee)->delete();
		return $deleted;
		} catch (\Exception $e) {
		report($e);
		return null;
		}

	}
	static public function createNewMonitor($data)
	{

		try {
		$monitor = Monitor::create($data);
		$saved = $monitor->save();
		return $saved;
		} catch (\Exception $e) {
		report($e);
		return false;
		}

	}
	public static function updateMonitor($id_Monitor,$data)
	{

		try {
		$monitor = Monitor::find($id_Monitor);
		$monitor->update($data);
		$saved =$monitor->save();
		return $saved;
		} catch (\Exception $e) {
		report($e);
		return false;
		}

	}
	public static function deleteMonitor($id_Monitor)
	{

		try{
		$deleted = Monitor::find($id_Monitor)->delete();
		return $deleted;
		} catch (\Exception $e) {
		report($e);
		return null;
		}

	}
	static public function createNewAdmin($data)
	{

		try {
		$admin = Admin::create($data);
		$saved = $admin->save();
		return $saved;
		} catch (\Exception $e) {
		report($e);
		return false;
		}

	}
	public static function updateAdmin($id_Admin,$data)
	{

		try {
		$admin = Admin::find($id_Admin);
		$admin->update($data);
		$saved =$admin->save();
		return $saved;
		} catch (\Exception $e) {
		report($e);
		return false;
		}

	}
	public static function deleteAdmin($id_Admin)
	{

		try{
		$deleted = Admin::find($id_Admin)->delete();
		return $deleted;
		} catch (\Exception $e) {
		report($e);
		return null;
		}

	}
	static public function createNewTask($data)
	{

		try {
		$task = Task::create($data);
		$saved = $task->save();
		return $saved;
		} catch (\Exception $e) {
		report($e);
		return false;
		}

	}
	public static function updateTask($id_Task,$data)
	{

		try {
		$task = Task::find($id_Task);
		$task->update($data);
		$saved =$task->save();
		return $saved;
		} catch (\Exception $e) {
		report($e);
		return false;
		}

	}
	public static function deleteTask($id_Task)
	{

		try{
		$deleted = Task::find($id_Task)->delete();
		return $deleted;
		} catch (\Exception $e) {
		report($e);
		return null;
		}

	}
	static public function createNewEmployeeTask($data)
	{

		try {
		$employeetask = EmployeeTask::create($data);
		$saved = $employeetask->save();
		return $saved;
		} catch (\Exception $e) {
		report($e);
		return false;
		}

	}
	public static function updateEmployeeTask($id_EmployeeTask,$data)
	{

		try {
		$employeetask = EmployeeTask::find($id_EmployeeTask);
		$employeetask->update($data);
		$saved =$employeetask->save();
		return $saved;
		} catch (\Exception $e) {
		report($e);
		return false;
		}

	}
	public static function deleteEmployeeTask($id_EmployeeTask)
	{

		try{
		$deleted = EmployeeTask::find($id_EmployeeTask)->delete();
		return $deleted;
		} catch (\Exception $e) {
		report($e);
		return null;
		}

	}
}
