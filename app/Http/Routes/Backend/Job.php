<?php

Route::group(['prefix' => 'job', 'namespace' => 'Job'], function ()
{
    // JOB TITLES
    Route::get('titles/{id}/destroy', ['as' => 'admin.job.titles.delete', 'uses' => 'JobtitleController@destroy']);
    Route::resource('titles', 'JobtitleController');

    // PAY GRADES
    Route::get('paygrades/{id}/destroy', ['as' => 'admin.job.paygrades.delete', 'uses' => 'PaygradeController@destroy']);
    Route::resource('paygrades', 'PaygradeController');
    // EMPLOYMENT STATUS
    Route::get('employment-status/{id}/destroy', ['as' => 'admin.job.employment-status.delete', 'uses' => 'EmpstatusController@destroy']);
    Route::resource('employment-status', 'EmpstatusController');
});
