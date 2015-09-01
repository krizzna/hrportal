<?php

namespace App\Http\Controllers\Backend\Employee;

use Illuminate\Http\Request;

use Input;
use Redirect;
use App\Employee;
use App\Empsalary;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EmpsalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Employee $employee)
    {
        return view('backend.employees.salary', compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Employee $employee)
    {
        return view('backend.employees.salary-create', compact('employee'));
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

	Empsalary::create($input);

	return Redirect::route('admin.employee.list.salary.index', $employee->id)->withFlashSuccess('Salary components was successfully created.'); 
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
    public function edit(Employee $employee, Empsalary $salary)
    {
        return view('backend.employees.salary-edit', compact('employee', 'salary'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, Employee $employee, Empsalary $salary)
    {
        $input = array_except(Input::all(), '_method');

	$salary->update($input);

	return Redirect::route('admin.employee.list.salary.index', $employee->id)->withFlashSuccess('Salary components was successfully edited.'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Employee $employee, Empsalary $salary)
    {
        $salary->deleted();

	return Redirect::route('admin.employee.list.salary.index', $employee->id)->withFlashSuccess('Salary components was successfully deleted.');
    }
}
