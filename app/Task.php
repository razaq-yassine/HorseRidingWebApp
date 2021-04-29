<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Throwable;

class Task extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'id_Task';

    //CRUD methods
    static public function createNewTask($data){

        try {
            $task = Task::create($data);
            return $task->save();

        } catch (\Exception $e) {
            report($e);
            return false;
        }
    }
    public function updateThisTask($data){
        try {
            $this->update($data);
            return $this->save();
        } catch (\Exception $e) {
            report($e);
            return false;
        }
    }
    public function deleteThisTask(){
        try{
            return Task::find($this->id_Task)->delete();
        } catch (\Exception $e) {
            report($e);
            return null;
        }
    }

    //static methods

    //methods

    public function getAllEmployeetasks(){
        return EmployeeTask::where('Id_Task', $this->id_Task)->get();
        //returns array of Employeetasks
    }

}
