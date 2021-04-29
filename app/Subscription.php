<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Throwable;

class Subscription extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'id_Subscription';

    //CRUD methods
    static public function createNewSubscription($data){

        try {
            $subscription = Subscription::create($data);
            return $subscription->save();

        } catch (\Exception $e) {
            report($e);
            return false;
        }
    }
    public function updateThisSubscription($data){
        try {
            $this->update($data);
            return $this->save();
        } catch (\Exception $e) {
            report($e);
            return false;
        }
    }
    public function deleteThisSubscription(){
        try{
            return Subscription::find($this->id_Subscription)->delete();
        } catch (\Exception $e) {
            report($e);
            return null;
        }
    }

    //static methods

    //methods

    public function getAllSubclients(){
        return SubClient::where('Id_Subscription', $this->id_Subscription)->get();
        //returns array of Subclients
    }

}
