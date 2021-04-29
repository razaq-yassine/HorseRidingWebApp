<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Throwable;

class SubClient extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'id_SubClient';

    //CRUD methods
    static public function createNewSubClient($data){

        try {
            $subclient = SubClient::create($data);
            return $subclient->save();

        } catch (\Exception $e) {
            report($e);
            return false;
        }
    }
    public function updateThisSubClient($data){
        try {
            $this->update($data);
            return $this->save();
        } catch (\Exception $e) {
            report($e);
            return false;
        }
    }
    public function deleteThisSubClient(){
        try{
            return SubClient::find($this->id_SubClient)->delete();
        } catch (\Exception $e) {
            report($e);
            return null;
        }
    }

    //static methods

    //methods
    public function getSubscription(){
        return Subscription::find($this->Id_Subscription);
        // return an object of Subscription
    }
    public function getClient(){
        return Client::find($this->Id_Client);
        // return an object of Client
    }


}
