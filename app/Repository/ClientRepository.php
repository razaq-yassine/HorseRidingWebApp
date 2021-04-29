<?php

namespace App\Repository;

use Illuminate\Http\Request;
// imports

class ClientRepository
{
    // controller functions
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
}
