<?php

Route::group(['prefix' => 'loan', 'namespace' => 'Loan'], function ()
{
    // Loans
    Route::get('types/{id}/destroy', ['as' => 'admin.loan.types.delete', 'uses' => 'LoanController@destroy']);
    Route::resource('types', 'LoanController');

    
});
