<?php

namespace App\Http\Controllers\Backend\Employee;

use Illuminate\Http\Request;

use Input;
use Redirect;
use App\Employee;
use App\Empdependent;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EmpdependentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Employee $employee)
    {
        return view('backend.employees.dependents', compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Employee $employee)
    {
        return view('backend.employees.dependents-create', compact('employee'));
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

	Empdependent::create($input);

	return Redirect::route('admin.employee.list.dependents.index', $employee->id)->withFlashSuccess('Employee dependent was successfully created.'); 
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
    public function edit(Employee $employee, Empdependent $dependents)
    {
        return view('backend.employees.dependents-edit', compact('employee', 'dependents'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, Employee $employee, Empdependent $dependents)
    {
        $input = array_except(Input::all(), '_method');

	$dependents->update($input);

	return Redirect::route('admin.employee.list.dependents.index', $employee->id)->withFlashSuccess('Employee dependent was successfully edited.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Employee $employee, Empdependent $dependents)
    {
        $dependents->delete();

	return Redirect::route('admin.employee.list.dependents.index', $employee->id)->withFlashSuccess('Employee dependent was successfully deleted.');
    }
}
