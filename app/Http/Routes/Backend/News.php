<?php

Route::group(['prefix' => 'news', 'namespace' => 'News'], function ()
{
    Route::get('post/{id}/destroy', ['as' => 'admin.news.post.delete', 'uses' => 'CompanyController@destroy']);
    Route::resource('post', 'PostController');
});
