<?php

namespace App\Http\Controllers\Backend\Job;

use Illuminate\Http\Request;

use Input;
use Redirect;
use App\Empstatus;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EmpstatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $emps = Empstatus::All();

	return view('backend.admin.job.empstatus.index', compact('emps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.admin.job.empstatus.create');
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
	Empstatus::create($input);

	return Redirect::route('admin.job.employment-status.index')->withFlashSuccess('Employment Status data was successfully created.');
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
        $emp = Empstatus::findOrFail($id);

	return view('backend.admin.job.empstatus.edit', compact('emp'));
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
        $emp = Empstatus::findOrFail($id);
	$input = array_except(Input::All(), '_method');

	$emp->update($input);

	return Redirect::route('admin.job.employment-status.index')->withFlashSuccess('Employment Status data was successfully Edited.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $emp = Empstatus::findOrFail($id)->delete();

	return Redirect::route('admin.job.employment-status.index')->withFlashSuccess('Employment Status data was successfully Deleted.');
    }
}
