<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyStructuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_structures', function(Blueprint $table)
	{
	     $table->increments('id');
	     $table->string('name');
	     $table->enum('type',['Company','Head Office','Regional Office','Department','Unit','Sub Unit','Other']);
	     $table->string('parent')->default('-');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('company_structures');
    }
}
