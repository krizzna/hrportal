<?php

namespace App\Http\Controllers\Backend\Employee;

use Illuminate\Http\Request;

use Input;
Use Redirect;
use App\Employee;
use App\Empemergency;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EmpemergencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Employee $employee)
    {
        return view('backend.employees.econtacts', compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Employee $employee)
    {
        return view('backend.employees.econtacts-create', compact('employee'));
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

	Empemergency::create($input);

	return Redirect::route('admin.employee.list.econtacts.index', $employee->id)->withFlashSuccess('Employee Emergency Contact was successfully created.'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Employee $employee, Empemergency $econtacts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Employee $employee, Empemergency $econtacts)
    {
        return view('backend.employees.econtacts-edit', compact('employee', 'econtacts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, Employee $employee, Empemergency $econtacts)
    {
        $input = array_except(Input::all(), '_method');
	$econtacts->update($input);

	return Redirect::route('admin.employee.list.econtacts.index', $employee->id)->withFlashSuccess('Employee Emergency Contact was successfully updated.'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Employee $employee, Empemergency $econtacts)
    {
        $econtacts->delete();

	return Redirect::route('admin.employee.list.econtacts.index', $employee->id)->withFlashSuccess('Employee Emergency Contact was successfully deleted.'); 
    }
}
