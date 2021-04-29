<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Throwable;

class Monitor extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'id_Monitor';

    //CRUD methods
    static public function createNewMonitor($data){

        try {
            $monitor = Monitor::create($data);
            return $monitor->save();

        } catch (\Exception $e) {
            report($e);
            return false;
        }
    }
    public function updateThisMonitor($data){
        try {
            $this->update($data);
            return $this->save();
        } catch (\Exception $e) {
            report($e);
            return false;
        }
    }
    public function deleteThisMonitor(){
        try{
            return Monitor::find($this->id_Monitor)->delete();
        } catch (\Exception $e) {
            report($e);
            return null;
        }
    }

    //static methods

    //methods
    public function getEmployee(){
        return Employee::find($this->Id_Employee);
        // return an object of Employee
    }

    public function getAllSessions(){
        return Session::where('Id_Monitor', $this->id_Monitor)->get();
        //returns array of Sessions
    }

}
