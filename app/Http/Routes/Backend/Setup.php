<?php

Route::group(['prefix' => 'setup', 'namespace' => 'Setup'], function ()
{
	/* Company Structure Setup */
	Route::group(['prefix' => 'company'], function ()
	{
   		Route::get('structures/{id}/destroy', ['as' => 'admin.setup.company.structures.delete', 'uses' => 'CompanyController@destroy']);
    	Route::resource('structures', 'CompanyController');
	});

	/* Job Details Setup */
	Route::group(['prefix' => 'job'], function ()
	{
	    // JOB TITLES
	    Route::get('titles/{id}/destroy', ['as' => 'admin.setup.job.titles.delete', 'uses' => 'JobtitleController@destroy']);
	    Route::resource('titles', 'JobtitleController');

	    // PAY GRADES
	    Route::get('paygrades/{id}/destroy', ['as' => 'admin.setup.job.paygrades.delete', 'uses' => 'PaygradeController@destroy']);
	    Route::resource('paygrades', 'PaygradeController');

	    // EMPLOYMENT STATUS
	    Route::get('employment-status/{id}/destroy', ['as' => 'admin.setup.job.employment-status.delete', 'uses' => 'EmpstatusController@destroy']);
	    Route::resource('employment-status', 'EmpstatusController');
	});

	/* Qualification Setup */
	Route::group(['prefix' => 'qualification'], function ()
	{
	    // Skills
	    Route::get('skills/{id}/destroy', ['as' => 'admin.setup.qualification.skills.delete', 'uses' => 'SkillController@destroy']);
	    Route::resource('skills', 'SkillController');

	    //Educations
	    Route::get('educations/{id}/destroy', ['as' => 'admin.setup.qualification.educations.delete', 'uses' => 'EducationController@destroy']);
	    Route::resource('educations', 'EducationController');

	    //Certifications
	    Route::get('certification/{id}/destroy', ['as' => 'admin.setup.qualification.certifications.delete', 'uses' => 'CertificationController@destroy']);
	    Route::resource('certifications', 'CertificationController');

	    //Languages
	    Route::get('languages/{id}/destroy', ['as' => 'admin.setup.qualification.languages.delete', 'uses' => 'LanguageController@destroy']);
	    Route::resource('languages', 'LanguageController');  
	});

	/* Loan Setup */
	Route::group(['prefix' => 'loan'], function ()
	{
	    // Loans
	    Route::get('types/{id}/destroy', ['as' => 'admin.setup.loan.types.delete', 'uses' => 'LoanController@destroy']);
	    Route::resource('types', 'LoanController');
	});
});
