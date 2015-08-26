<?php

namespace App\Http\Controllers\Backend\Qualification;

use Illuminate\Http\Request;

use Input;
use Redirect;
use App\Language;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $langs = Language::All();

	return view('backend.admin.qualification.language.index', compact('langs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.admin.qualification.language.create');
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
	Language::create($input);

	return Redirect::route('admin.qualification.languages.index')->withFlashSuccess('Language data was successfully created.');
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
        $lang = Language::findOrFail($id);

	return view('backend.admin.qualification.language.edit', compact('lang'));
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
        $lang = Language::findOrFail($id);
	$input = array_except(Input::All(), '_method');

	$lang->update($input);

	return Redirect::route('admin.qualification.languages.index')->withFlashSuccess('Language data was successfully edited.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $lang = Language::findOrFail($id)->delete();

	return Redirect::route('admin.qualification.languages.index')->withFlashSuccess('Language data was successfully deleted.');
    }
}
