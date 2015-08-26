<?php

namespace App\Http\Controllers\Backend\Qualification;

use Illuminate\Http\Request;

use Input;
use Redirect;
use App\Certification;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CertificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $certs = Certification::All();

	return view('backend.admin.qualification.certification.index', compact('certs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.admin.qualification.certification.create');
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
	Certification::create($input);

	return Redirect::route('admin.qualification.certifications.index')->withFlashSuccess('Certification data was successfully created.');
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
        $cert = Certification::findOrFail($id);

	return view('backend.admin.qualification.certification.edit', compact('cert'));
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
        $cert = Certification::findOrFail($id);
	$input = array_except(Input::All(), '_method');

	$cert->update($input);

	return Redirect::route('admin.qualification.certifications.index')->withFlashSuccess('Certification data was successfully edited.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $cert = Certification::findOrFail($id)->delete();

	return Redirect::route('admin.qualification.certifications.index')->withFlashSuccess('Certification data was successfully deleted.');
    }
}
