<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionclientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessionclients', function (Blueprint $table) {
			$table->bigIncrements('id_SessionClient');
			$table->unsignedBigInteger('Id_Session');
			$table->unsignedBigInteger('Id_Client');
			$table->boolean('IsPayed_SessionClient');
			$table->boolean('IsPresent_SessionClient');
			$table->timestamps();
			 
			 
			$table->foreign('Id_Session')->references('id_Session')->on('sessions');
			$table->foreign('Id_Client')->references('id_Client')->on('clients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sessionclients');
    }
}
