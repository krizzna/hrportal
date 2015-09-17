<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeWorkExperienceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_work_experience', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_id')->unsigned();
	    $table->string('company');
	    $table->string('job_title');
	    $table->date('from_date')->default('0000-00-00');
	    $table->date('to_date')->default('0000-00-00');
	    $table->string('comment');
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
        Schema::drop('employee_work_experience');
    }
}
