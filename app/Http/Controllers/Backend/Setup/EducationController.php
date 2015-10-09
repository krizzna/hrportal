<?php

namespace App\Http\Controllers\Backend\Setup;

use Illuminate\Http\Request;

use Input;
use Redirect;
use App\Education;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $educations = Education::All();

	return view('backend.setup.qualification.education.index', compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.setup.qualification.education.create');
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
	Education::create($input);

	return Redirect::route('admin.setup.qualification.educations.index')->withFlashSuccess('Education data was successfully created.');
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
        $edu = Education::findOrFail($id);

	return view('backend.setup.qualification.education.edit', compact('edu'));
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
        $edu = Education::findOrFail($id);
	$input = array_except(Input::All(), '_method');

	$edu->update($input);

	return Redirect::route('admin.setup.qualification.educations.index')->withFlashSuccess('Education data was successfully edited.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $edu = Education::findOrFail($id)->delete();

	return Redirect::route('admin.setup.qualification.educations.index')->withFlashSuccess('Education data was successfully deleted.');
    }
}
