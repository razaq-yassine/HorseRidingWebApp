<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
			$table->bigIncrements('id_Employee');
            $table->unsignedBigInteger('Id_User');
			$table->double('Salary_Employee')->nullable();
			$table->string('Role_Employee')->nullable();
			$table->timestamps();

            $table->foreign('Id_User')->references('id_User')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
