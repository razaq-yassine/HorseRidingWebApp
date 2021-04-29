<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Throwable;

class Client extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'id_Client';

    //CRUD methods
    static public function createNewClient($data){

        try {
            $client = Client::create($data);
            return $client->save();

        } catch (\Exception $e) {
            report($e);
            return false;
        }
    }
    public function updateThisClient($data){
        try {
            $this->update($data);
            return $this->save();
        } catch (\Exception $e) {
            report($e);
            return false;
        }
    }
    public function deleteThisClient(){
        try{
            return Client::find($this->id_Client)->delete();
        } catch (\Exception $e) {
            report($e);
            return null;
        }
    }

    //static methods

    //methods
    public function getUser(){
        return User::find($this->Id_User);
        // return an object of User
    }

    public function getAllSubclients(){
        return SubClient::where('Id_Client', $this->id_Client)->get();
        //returns array of Subclients
    }
    public function getAllSessionclients(){
        return SessionClient::where('Id_Client', $this->id_Client)->get();
        //returns array of Sessionclients
    }

}
