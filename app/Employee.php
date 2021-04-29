<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Throwable;

class Employee extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'id_Employee';

    //CRUD methods
    static public function createNewEmployee($data){

        try {
            $employee = Employee::create($data);
            return $employee->save();

        } catch (\Exception $e) {
            report($e);
            return false;
        }
    }
    public function updateThisEmployee($data){
        try {
            $this->update($data);
            return $this->save();
        } catch (\Exception $e) {
            report($e);
            return false;
        }
    }
    public function deleteThisEmployee(){
        try{
            return Employee::find($this->id_Employee)->delete();
        } catch (\Exception $e) {
            report($e);
            return null;
        }
    }

    //static methods

    //methods

    public function getAllMonitors(){
        return Monitor::where('Id_Employee', $this->id_Employee)->get();
        //returns array of Monitors
    }
    public function getAllEmployeetasks(){
        return EmployeeTask::where('Id_Employee', $this->id_Employee)->get();
        //returns array of Employeetasks
    }

}
