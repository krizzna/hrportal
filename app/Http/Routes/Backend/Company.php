<?php

Route::group(['prefix' => 'company', 'namespace' => 'Company'], function ()
{
    Route::get('structures/{id}/destroy', ['as' => 'admin.company.structures.delete', 'uses' => 'CompanyController@destroy']);
    Route::resource('structures', 'CompanyController');
});
