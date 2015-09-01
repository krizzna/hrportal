<?php

namespace App\Http\Controllers\Backend\Employee;

use Illuminate\Http\Request;

use Input;
use Redirect;
use App\Education;
use App\Employee;
use App\Empqualification;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EmpqualificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Employee $employee)
    {
        return view('backend.employees.qualification.index', compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Employee $employee)
    {
        $edu = ['' => 'Select'] + Education::lists('name', 'id')->toArray();
	
	return view('backend.employees.qualification.create', compact('employee', 'edu'));
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

	Empqualification::create($input);

	return Redirect::route('admin.employee.list.qualification.index', $employee->id)->withFlashSuccess('Education components was successfully created.');
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
    public function edit(Employee $employee, Empqualification $qualification)
    {
        $edu = ['' => 'Select'] + Education::lists('name', 'id')->toArray();
	
        return view('backend.employees.qualification.edit', compact('employee','qualification', 'edu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, Employee $employee, Empqualification $qualification)
    {
        $input = array_except(Input::all(), '_method');

	$qualification->update($input);

	return Redirect::route('admin.employee.list.qualification.index', $employee->id)->withFlashSuccess('Education components was successfully edited.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Employee $employee, Empqualification $qualification)
    {
        $qualification->delete();

	return Redirect::route('admin.employee.list.qualification.index', $employee->id)->withFlashSuccess('Education components was successfully deleted.');
    }
}
