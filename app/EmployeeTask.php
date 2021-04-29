<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Throwable;

class EmployeeTask extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'id_EmployeeTask';

    //CRUD methods
    static public function createNewEmployeeTask($data){

        try {
            $employeetask = EmployeeTask::create($data);
            return $employeetask->save();

        } catch (\Exception $e) {
            report($e);
            return false;
        }
    }
    public function updateThisEmployeeTask($data){
        try {
            $this->update($data);
            return $this->save();
        } catch (\Exception $e) {
            report($e);
            return false;
        }
    }
    public function deleteThisEmployeeTask(){
        try{
            return EmployeeTask::find($this->id_EmployeeTask)->delete();
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
    public function getTask(){
        return Task::find($this->Id_Task);
        // return an object of Task
    }


}
