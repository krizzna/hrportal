<?php

namespace App\Http\Controllers\Backend\Employee;

use Illuminate\Http\Request;

use Input;
use Redirect;
use App\Employee;
use App\Empcert;
use App\Certification;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EmpcertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Employee $employee)
    {
        return view('backend.employees.certification.index', compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Employee $employee)
    {
        $certs = ['0' => 'Select'] + Certification::lists('name', 'id')->toArray();

	return view('backend.employees.certification.create', compact('employee', 'certs'));
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

	Empcert::create($input);

	return Redirect::route('admin.employee.list.certification.index', $employee->id)->withFlashSuccess('Employee certification was successfully created.');
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
    public function edit(Employee $employee, Empcert $certification)
    {
        $certs = ['0' => 'Select'] + Certification::lists('name', 'id')->toArray();

	return view('backend.employees.certification.edit', compact('employee', 'certs', 'certification'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, Employee $employee, Empcert $certification)
    {
        $input = array_except(Input::all(), '_method');

	$certification->update($input);

	return Redirect::route('admin.employee.list.certification.index', $employee->id)->withFlashSuccess('Employee certification was successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Employee $employee, Empcert $certification)
    {
        $certification->delete();

	return Redirect::route('admin.employee.list.certification.index', $employee->id)->withFlashSuccess('Employee certification was successfully deleted.');
    }
}
