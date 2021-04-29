<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
			$table->bigIncrements('id_Session');
			$table->unsignedBigInteger('Id_Monitor');
			$table->string('Name_Session')->nullable();
			$table->double('Price_Session')->nullable();
			$table->date('Date_Session')->nullable();
			$table->timestamps();
			 
			 
			$table->foreign('Id_Monitor')->references('id_Monitor')->on('monitors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sessions');
    }
}
