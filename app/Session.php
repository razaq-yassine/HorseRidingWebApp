<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Throwable;

class Session extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'id_Session';

    //CRUD methods
    static public function createNewSession($data){

        try {
            $session = Session::create($data);
            return $session->save();

        } catch (\Exception $e) {
            report($e);
            return false;
        }
    }
    public function updateThisSession($data){
        try {
            $this->update($data);
            return $this->save();
        } catch (\Exception $e) {
            report($e);
            return false;
        }
    }
    public function deleteThisSession(){
        try{
            return Session::find($this->id_Session)->delete();
        } catch (\Exception $e) {
            report($e);
            return null;
        }
    }

    //static methods

    //methods
    public function getMonitor(){
        return Monitor::find($this->Id_Monitor);
        // return an object of Monitor
    }

    public function getAllSessionclients(){
        return SessionClient::where('Id_Session', $this->id_Session)->get();
        //returns array of Sessionclients
    }

}
