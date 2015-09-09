<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmergencyContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emergency_contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_id')->unsigned();
	    $table->foreign('employee_id')->references('id')->on('employees');
	    $table->string('name');
	    $table->string('relationship');
	    $table->string('home_phone');
	    $table->string('mobile_phone');
	    $table->string('work_phone');
	    $table->string('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('emergency_contacts');
    }
}
