<?php

Route::group(['prefix' => 'qualification', 'namespace' => 'Qualification'], function ()
{
    // Skills
    Route::get('skills/{id}/destroy', ['as' => 'admin.qualification.skills.delete', 'uses' => 'SkillController@destroy']);
    Route::resource('skills', 'SkillController');

    //Educations
    Route::get('educations/{id}/destroy', ['as' => 'admin.qualification.educations.delete', 'uses' => 'EducationController@destroy']);
    Route::resource('educations', 'EducationController');

    //Certifications
    Route::get('certification/{id}/destroy', ['as' => 'admin.qualification.certifications.delete', 'uses' => 'CertificationController@destroy']);
    Route::resource('certifications', 'CertificationController');

    //Languages
    Route::get('languages/{id}/destroy', ['as' => 'admin.qualification.languages.delete', 'uses' => 'LanguageController@destroy']);
    Route::resource('languages', 'LanguageController');

    
});
