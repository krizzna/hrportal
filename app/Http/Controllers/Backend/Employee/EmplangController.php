<?php

namespace App\Http\Controllers\Backend\Employee;

use Illuminate\Http\Request;

use Input;
use Redirect;
use App\Employee;
use App\Emplang;
use App\Language;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EmplangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Employee $employee)
    {
        return view('backend.employees.language.index', compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Employee $employee)
    {
        $lang = ['0' => 'Select'] + Language::lists('name', 'id')->toArray();

	return view('backend.employees.language.create', compact('employee', 'lang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request, Employee $employee)
    {
        $input = Input::all();
	$input['employee_id'] = $employee->id;

	Emplang::create($input);

	return Redirect::route('admin.employee.list.languages.index', $employee->id)->withFlashSuccess('Language was successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Employee $employee, Emplang $language)
    {
        $lang = ['0' => 'Select'] + Language::lists('name', 'id')->toArray();

	return view('backend.employees.language.edit', compact('employee', 'lang', 'language'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, Employee $employee, Emplang $language)
    {
        $input = array_except(Input::all(), '_method');

	$language->update($input);

	return Redirect::route('admin.employee.list.languages.index', $employee->id)->withFlashSuccess('Language was successfully edited.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Employee $employee, Emplang $language)
    {
        $language->delete();

	return Redirect::route('admin.employee.list.languages.index', $employee->id)->withFlashSuccess('Language was successfully deleted.');
    }
}
