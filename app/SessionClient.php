<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Throwable;

class SessionClient extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'id_SessionClient';
    protected $table = 'sessionclients';
    //CRUD methods
    static public function createNewSessionClient($data){

        try {
            $sessionclient = SessionClient::create($data);
            return $sessionclient->save();

        } catch (\Exception $e) {
            report($e);
            return false;
        }
    }
    public function updateThisSessionClient($data){
        try {
            $this->update($data);
            return $this->save();
        } catch (\Exception $e) {
            report($e);
            return false;
        }
    }
    public function deleteThisSessionClient(){
        try{
            return SessionClient::find($this->id_SessionClient)->delete();
        } catch (\Exception $e) {
            report($e);
            return null;
        }
    }

    //static methods

    //methods
    public function getSession(){
        return Session::find($this->Id_Session);
        // return an object of Session
    }
    public function getClient(){
        return Client::find($this->Id_Client);
        // return an object of Client
    }


}
