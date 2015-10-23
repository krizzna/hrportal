<?php

namespace App\Http\Controllers\Backend\Setup;

use Illuminate\Http\Request;

use Input;
use Redirect;
use App\Skill;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $skills = Skill::All();

	    return view('backend.setup.qualification.index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.setup.qualification.create');
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
	    Skill::create($input);

	    return Redirect::route('admin.setup.qualification.skills.index')->withFlashSuccess('Skill data was successfully created.');
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
        $skill = Skill::find($id);

        return view('backend.setup.qualification.edit', compact('skill'));
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
        $skill = Skill::findOrFail($id);
	$input = array_except(Input::All(), '_method');

	$skill->update($input);

	return Redirect::route('admin.setup.qualification.skills.index')->withFlashSuccess('Skill data was successfully edited.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $skill = Skill::findOrFail($id)->delete();

	return Redirect::route('admin.setup.qualification.skills.index')->withFlashSuccess('Skill data was successfully deleted.');
    }
}
