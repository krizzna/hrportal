<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_contracts', function (Blueprint $table) {
            $table->increments('id');
	    $table->integer('employee_id')->unsigned();
	    $table->integer('contract_id');
	    $table->date('start_date')->default('0000-00-00');
	    $table->date('end_date')->default('0000-00-00');
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
        Schema::drop('employee_contracts');
    }
}
