<?php

namespace App\Http\Controllers\Backend\Employee;

use Illuminate\Http\Request;

use Input;
use Redirect;
use App\Employee;
use App\Nationality;
use App\Empstatus;
use App\Job;
use App\Paygrade;
use App\Provinsi;
use App\Kabupaten;
use App\Kelurahan;
use App\Kecamatan;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $employees = Employee::All();

	return view('backend.employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
	$input = Input::get('option');
	$nat = ['' => 'Select'] + Nationality::lists('name', 'id')->toArray();
	$emps = ['' => 'Select'] + Empstatus::lists('name', 'id')->toArray();
	$jobs = ['' => 'Select'] + Job::lists('name', 'id')->toArray();
	$pay = ['' => 'Select'] + Paygrade::lists('name', 'id')->toArray();
	$prov = ['' => 'Select'] + Provinsi::lists('nama', 'id')->toArray();
	$kab = ['' => 'Select'] + Kabupaten::lists('nama', 'id')->toArray();
	$kec = ['' => 'Select'] + Kecamatan::lists('nama', 'id')->toArray();
	$kel = ['' => 'Select'] + Kelurahan::lists('nama', 'id')->toArray();
	 
	
        return view('backend.employees.create', compact('nat', 'emps', 'jobs', 'pay', 'prov', 'kab', 'kec', 'kel'));
    }

    public function listkab()
    {
	 $input = Input::get('option');
         $numbers = DB::table('kabupaten')
         ->where('provinsi_id', $input)
         ->orderBy('id', 'asc')
         ->lists('nama','id');

         return Response::json($numbers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $input = Input::All();
	Employee::create($input);

	return Redirect::route('admin.employee.list.index')->withFlashSuccess('Employmee data was successfully created.');
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
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);

	return view('backend.employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
