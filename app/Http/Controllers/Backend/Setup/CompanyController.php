<?php

namespace App\Http\Controllers\Backend\Setup;

use Illuminate\Http\Request;

use Input;
use Redirect;
use App\CompanyStructure;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
	  $comps = CompanyStructure::All();
	  return view('backend.setup.company.index', compact('comps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
	 $parents = ['' => '-'] + CompanyStructure::lists('name', 'id')->toArray(); //http://laravel-tricks.com/tricks/easy-dropdowns-with-eloquents-lists-method
	 return view('backend.setup.company.create', compact('parents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
         $input = input::all();
	 CompanyStructure::create($input);

	 return Redirect::route('admin.setup.company.structures.index')->withFlashSuccess('Company structure data was successfully created.');
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
        $comp = CompanyStructure::findOrFail($id);
	$parents = ['' => '-'] + CompanyStructure::lists('name', 'id')->toArray(); 

	return view('backend.setup.company.edit', compact('comp', 'parents'));
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
        $comp = CompanyStructure::findOrFail($id);
	$input = array_except(Input::all(), '_method');

	$comp->update($input);

	return Redirect::route('admin.setup.company.structures.index')->withFlashSuccess('Company structure data was successfully edited.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $comp = CompanyStructure::findOrFail($id)->delete();

	return Redirect::route('admin.setup.company.structures.index')->withFlashSuccess('Company structure data was successfully deleted.');
    }
}
