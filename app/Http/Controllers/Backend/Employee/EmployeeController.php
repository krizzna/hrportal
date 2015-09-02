<?php

namespace App\Http\Controllers\Backend\Employee;

use Illuminate\Http\Request;

use Input;
use Redirect;
use Response;
use Validator;
use App\Employee;
use App\Nationality;
use App\Empstatus;
use App\Job;
use App\Paygrade;
use App\Provinsi;
use App\Kabupaten;
use App\Kelurahan;
use App\Kecamatan;
use App\CompanyStructure;
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
        $employees = Employee::with('company_structure')->get();

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
	$dept = ['' => 'Select'] + CompanyStructure::lists('name', 'id')->toArray();
	
        return view('backend.employees.create', compact('nat', 'emps', 'jobs', 'pay', 'prov', 'dept'));
    }

    public function listkab()
    {
	 $prov = Input::get('option');
         $kab = ['0' => 'Select provinsi first'] + Kabupaten::where('provinsi_id', '=', $prov)->lists('nama', 'id')->toArray();
         return Response::make($kab);

    }
    
    public function listkec()
    {
	 $kab = Input::get('option');
         $kec = ['0' => 'Select kabupaten first'] + Kecamatan::where('kabupaten_id', '=', $kab)->lists('nama', 'id')->toArray();
         return Response::make($kec);

    }
    
    public function listkel()
    {
	 $kec = Input::get('option');
         $kel = ['0' => 'Select kecamatan first'] + Kelurahan::where('kecamatan_id', '=', $kec)->lists('nama', 'id')->toArray();
         return Response::make($kel);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Employee $employee, Request $request)
    {
        $input = Input::all();

	try
	{
	    $this->validate($input); //http://stackoverflow.com/questions/25993123/laravel-4-2-storing-image-path-to-database

	    if ( Input::hasFile('image') ) {
		$file = Input::file('image');
		$name = time() . '-' . $file->getClientOriginalName();
		$file = $file->move('img/upload/employee/', $name);
		$path = $file->getRealPath();
		$pos = strpos($path, '/img/');
		if ( $pos !== false ) {
		    $path = substr($path, $pos + 1);
		}
		$input['image'] = $path;
	    }

	    $model = new Employee($input);
	    $model->save();

	    return Redirect::route('admin.employee.list.index')->withFlashSuccess('Employee data was successfully created.');
	}
	catch (FormValidationException $e)
        {
            return Redirect::back()->withInput()->withErrors($e->getErrors());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Employee $employee)
    {
	$nat = Nationality::lists('name', 'id');

	return view('backend.employees.show', compact('employee', 'nat'));
    }

    public function cdetails($id)
    {
	$employee = Employee::findOrFail($id);
	$prov = Provinsi::lists('nama', 'id');
	$kab = Kabupaten::lists('nama', 'id');
	$kec = Kecamatan::lists('nama', 'id');
	$kel = Kelurahan::lists('nama', 'id');

	return view('backend.employees.cdetails', compact('employee', 'prov', 'kab', 'kec', 'kel'));
    }

    public function job($id)
    {
	$employee = Employee::findOrFail($id);
	$jobs = Job::lists('name','id');
	$emps = Empstatus:: lists('name', 'id');
	$dept = CompanyStructure::lists('name', 'id');

	return view('backend.employees.job', compact('employee', 'jobs', 'emps', 'dept'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Employee $employee)
    {
	return view('backend.employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

	return Redirect::route('admin.employee.list.index')->withFlashSuccess('Employee data was successfully deleted.');
    }
}
