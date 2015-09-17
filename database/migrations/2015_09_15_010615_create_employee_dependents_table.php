<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeDependentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_dependents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_id')->unsigned();
	    $table->string('name');
	    $table->enum('relationship', ['Child','Spouse','Parent','Other'])->nulled();
	    $table->date('dob')->default('0000-00-00');
	    $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employee_dependents');
    }
}
