<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubclientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subclients', function (Blueprint $table) {
			$table->bigIncrements('id_SubClient');
			$table->unsignedBigInteger('Id_Subscription');
			$table->unsignedBigInteger('Id_Client');
			$table->boolean('IsPayed_SubClient');
			$table->timestamps();
			 
			 
			$table->foreign('Id_Subscription')->references('id_Subscription')->on('subscriptions');
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
        Schema::dropIfExists('subclients');
    }
}
