<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeetasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employeetasks', function (Blueprint $table) {
			$table->bigIncrements('id_EmployeeTask');
			$table->unsignedBigInteger('Id_Employee');
			$table->unsignedBigInteger('Id_Task');
			$table->timestamps();
			 
			 
			$table->foreign('Id_Employee')->references('id_Employee')->on('employees');
			$table->foreign('Id_Task')->references('id_Task')->on('tasks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employeetasks');
    }
}
