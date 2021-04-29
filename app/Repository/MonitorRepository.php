<?php

namespace App\Repository;

use Illuminate\Http\Request;
// imports

class MonitorRepository
{
    // controller functions
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
}
