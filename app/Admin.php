<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Throwable;

class Admin extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'id_Admin';

    //CRUD methods
    static public function createNewAdmin($data){

        try {
            $admin = Admin::create($data);
            return $admin->save();

        } catch (\Exception $e) {
            report($e);
            return false;
        }
    }
    public function updateThisAdmin($data){
        try {
            $this->update($data);
            return $this->save();
        } catch (\Exception $e) {
            report($e);
            return false;
        }
    }
    public function deleteThisAdmin(){
        try{
            return Admin::find($this->id_Admin)->delete();
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


}
