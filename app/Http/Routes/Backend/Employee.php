<?php

Route::group(['prefix' => 'employee', 'namespace' => 'Employee'], function ()
{
    //Model binding
    Route::model('econtacts', 'Empemergency');
    Route::model('dependents', 'Empdependent');
    Route::model('salary', 'Empsalary');
    Route::model('qualification', 'Empqualification');
    Route::model('experience', 'Empwork');
    Route::model('list', 'Employee');

    Route::bind('econtacts', function($value, $route) {
	return App\Empemergency::whereId($value)->first();
    });
    Route::bind('dependents', function($value, $route) {
	return App\Empdependent::whereId($value)->first();
    });
    Route::bind('salary', function($value, $route) {
	return App\Empsalary::whereId($value)->first();
    });
    Route::bind('qualification', function($value, $route) {
	return App\Empqualification::whereId($value)->first();
    });
    Route::bind('experience', function($value, $route) {
	return App\Empwork::whereId($value)->first();
    });
    Route::bind('list', function($value, $route) {
	return App\Employee::whereId($value)->first();
    });
    
    //Populate Dropdown
    Route::get('listkab', ['as' => 'admin.employee.listkab', 'uses' => 'EmployeeController@listkab']);
    Route::get('listkec', ['as' => 'admin.employee.listkec', 'uses' => 'EmployeeController@listkec']);
    Route::get('listkel', ['as' => 'admin.employee.listkel', 'uses' => 'EmployeeController@listkel']);

    //Show Employee Details
    Route::get('list/cdetails/{id}', ['as' => 'admin.employee.list.cdetails', 'uses' => 'EmployeeController@cdetails']);
    Route::get('list/job/{id}', ['as' => 'admin.employee.list.job', 'uses' => 'EmployeeController@job']);

    //Destroy
    Route::get('list/{id}/destroy', ['as' => 'admin.employee.list.delete', 'uses' => 'EmployeeController@destroy']);
    Route::get('list/{list}/econtacts/{econtacts}/destroy', ['as' => 'admin.employee.list.econtacts.delete', 'uses' => 'EmpemergencyController@destroy']);
    Route::get('list/{list}/dependents/{dependents}/destroy', ['as' => 'admin.employee.list.dependents.delete', 'uses' => 'EmpdependentController@destroy']);
    Route::get('list/{list}/salary/{salary}/destroy', ['as' => 'admin.employee.list.salary.delete', 'uses' => 'EmpsalaryController@destroy']);
    Route::get('list/{list}/qualification/{qualification}/destroy', ['as' => 'admin.employee.list.qualification.delete', 'uses' => 'EmpqualificationController@destroy']);
    Route::get('list/{list}/experience/{experience}/destroy', ['as' => 'admin.employee.list.experience.delete', 'uses' => 'EmpworkController@destroy']);

    //CRUD
    Route::resource('list', 'EmployeeController');
    Route::resource('list.econtacts', 'EmpemergencyController');
    Route::resource('list.dependents', 'EmpdependentController');
    Route::resource('list.salary', 'EmpsalaryController');
    Route::resource('list.qualification', 'EmpqualificationController');
    Route::resource('list.experience', 'EmpworkController');
});
