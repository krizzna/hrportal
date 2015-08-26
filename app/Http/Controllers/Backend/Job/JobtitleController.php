<?php

namespace App\Http\Controllers\Backend\Job;

use Illuminate\Http\Request;

use Input;
use Redirect;
use App\Job;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class JobtitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $titles = Job::All();

	return view('backend.admin.job.index', compact('titles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.admin.job.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $input = Input::all();
	Job::create($input);

	return Redirect::route('admin.job.titles.index')->withFlashSuccess('Job titles data was successfully created.');
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
        $title = Job::findOrFail($id);

	return view('backend.admin.job.edit', compact('title'));
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
        $title = Job::findOrFail($id);
	$input = array_except(Input::all(), '_method');

	$title->update($input);

	return Redirect::route('admin.job.titles.index')->withFlashSuccess('Job titles data was successfully edited.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $title = Job::findOrFail($id)->delete();

	return Redirect::route('admin.job.titles.index')->withFlashSuccess('Job titles data was successfully deleted.');
    }
}
