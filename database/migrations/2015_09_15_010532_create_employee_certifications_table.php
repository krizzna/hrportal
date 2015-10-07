<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeCertificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_certifications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_id')->unsigned();
            $table->integer('certification_id')->unsigned();
	    $table->string('institute');
	    $table->date('date_start')->default('0000-00-00');
	    $table->date('date_end')->default('0000-00-00');
	    $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
	    $table->foreign('certification_id')->references('id')->on('certifications')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employee_certifications');
    }
}
