<?php

namespace App\Http\Controllers\Backend\Employee;

use Illuminate\Http\Request;

use Input;
use Redirect;
use App\Employee;
use App\Empwork;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EmpworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Employee $employee)
    {
        return view('backend.employees.experience.index', compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Employee $employee)
    {
        return view('backend.employees.experience.create', compact('employee'));
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

	Empwork::create($input);

	return Redirect::route('admin.employee.list.experience.index', $employee->id)->withFlashSuccess('Work Experience was successfully created.');
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
    public function edit(Employee $employee, Empwork $experience)
    {
        return view('backend.employees.experience.edit', compact('employee', 'experience'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, Employee $employee, Empwork $experience)
    {
        $input = array_except(Input::all(), '_method');

	$experience->update($input);

	return Redirect::route('admin.employee.list.experience.index', $employee->id)->withFlashSuccess('Work Experience was successfully edited.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Employee $employee, Empwork $experience)
    {
        $experience->delete();

	return Redirect::route('admin.employee.list.experience.index', $employee->id)->withFlashSuccess('Work Experience was successfully deleted.');
    }
}
