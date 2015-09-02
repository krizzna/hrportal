<?php

namespace App\Http\Controllers\Backend\Employee;

use Illuminate\Http\Request;

use Input;
use Redirect;
use App\Employee;
use App\Empskill;
use App\Skill;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EmpskillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Employee $employee)
    {
        return view('backend.employees.skill.index', compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Employee $employee)
    {
        $skills = ['0' => 'Select'] + Skill::lists('name', 'id')->toArray();
	
	return view('backend.employees.skill.create', compact('employee', 'skills'));
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

	Empskill::create($input);

	return Redirect::route('admin.employee.list.skills.index', $employee->id)->withFlashSuccess('Employee skill was successfully created.');
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
    public function edit(Employee $employee, Empskill $skill)
    {
        $skills = ['0' => 'Select'] + Skill::lists('name', 'id')->toArray();
	return view('backend.employees.skill.edit', compact('employee', 'skill', 'skills'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, Employee $employee, Empskill $skill)
    {
        $input = array_except(Input::all(), '_method');

	$skill->update($input);

	return Redirect::route('admin.employee.list.skills.index', $employee->id)->withFlashSuccess('Employee skill was successfully edited.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Employee $employee, Empskill $skill)
    {
        $skill->delete();

	return Redirect::route('admin.employee.list.skills.index', $employee->id)->withFlashSuccess('Employee skill was successfully deleted.');
    }
}
