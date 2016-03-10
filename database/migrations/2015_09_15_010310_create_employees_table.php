<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->integer('nik');
	    $table->string('first_name');
	    $table->string('middle_name');
	    $table->string('last_name');
	    $table->string('nationality')->nullable();
	    $table->date('birthday')->default('0000-00-00');
	    $table->enum('gender', ['Male', 'Female']);
	    $table->enum('marital_status', ['Single','Married','Divorced','Widowed','Other']);
	    $table->integer('ktp');
	    $table->integer('sim');
	    $table->date('exp_date')->default('0000-00-00');
	    $table->string('npwp');
	    $table->string('other_id');
	    $table->integer('employment_status')->unsigned()->nullable();;
	    $table->integer('job_title')->unsigned()->nullable();;
	    $table->integer('pay_grade')->unsigned()->nullable();;
	    $table->string('address1');
	    $table->string('address2');
	    $table->integer('provinsi')->unsigned()->nullable();;
	    $table->integer('kabupaten_id')->unsigned()->nullable();;
	    $table->integer('kecamatan_id')->unsigned()->nullable();;
	    $table->integer('kelurahan_id')->unsigned()->nullable();;
	    $table->integer('postal_code');
	    $table->string('home_phone');
	    $table->string('mobile_phone');
	    $table->string('private_email');
	    $table->string('work_email');
	    $table->date('join_date')->default('0000-00-00');
	    $table->date('confirmed_date')->default('0000-00-00');
	    $table->integer('company_structure_id')->unsigned()->nullable();;
	    $table->integer('supervisor')->unsigned()->nullable();;
	    $table->date('terminate_date')->default('0000-00-00');
	    $table->string('image')->default('img/dist/avatar5.png');
	    $table->foreign('employment_status')->references('id')->on('employement_status');
	    $table->foreign('job_title')->references('id')->on('job_titles');
	    $table->foreign('pay_grade')->references('id')->on('pay_grades');
	    $table->foreign('provinsi')->references('id')->on('provinsi');
	    $table->foreign('kabupaten_id')->references('id')->on('kabupaten');
	    $table->foreign('kecamatan_id')->references('id')->on('kecamatan');
	    $table->foreign('kelurahan_id')->references('id')->on('kelurahan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employees');
    }
}
