<?php

namespace App\Http\Controllers\Backend\Setup;

use Illuminate\Http\Request;

use Input;
use Redirect;
use App\Paygrade;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PaygradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $pays = Paygrade::All();
        return view('backend.setup.job.paygrades.index', compact('pays'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.setup.job.paygrades.create');
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
	Paygrade::create($input);

	return Redirect::route('admin.setup.job.paygrades.index')->withFlashSuccess('Pay grades data was successfully created.');
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
        $pay = Paygrade::findOrFail($id);

	return view('backend.setup.job.paygrades.edit', compact('pay'));
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
        $pay = Paygrade::findOrFail($id);
	$input = array_except(Input::all(), '_method');

	$pay->update($input);

	return Redirect::route('admin.setup.job.paygrades.index')->withFlashSuccess('Pay grades data was successfully edited.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $pay = Paygrade::findOrFail($id)->delete();

	return Redirect::route('admin.setup.job.paygrades.index')->withFlashSuccess('Pay grades data was successfully deleted.');
    }
}
