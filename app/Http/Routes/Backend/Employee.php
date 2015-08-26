<?php
//use App\Provinsi;
//use App\Kabupaten;

Route::group(['prefix' => 'employee', 'namespace' => 'Employee'], function ()
{
    Route::get('list/{id}/destroy', ['as' => 'admin.employee.list.delete', 'uses' => 'EmployeeController@destroy']);
    Route::get('api/dropdown', function(){
       $input = Input::get('option');
       $prov = Provinsi::find($input);
       $kab = $prov->subcategory();
       return Response::make($kab->get(['id','nama']));
    });
    Route::resource('list', 'EmployeeController');
});
