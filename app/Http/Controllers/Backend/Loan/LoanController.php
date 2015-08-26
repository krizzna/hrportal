<?php

namespace App\Http\Controllers\Backend\Loan;

use Illuminate\Http\Request;

use Input;
use Redirect;
use App\Loan;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $loans = Loan::All();

	return view('backend.admin.loan.index', compact('loans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.admin.loan.create');
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
	Loan::create($input);

	return Redirect::route('admin.loan.types.index')->withFlashSuccess('Company Loans data was successfully created.');
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
        $loan = Loan::findOrFail($id);

	return view('backend.admin.loan.edit', compact('loan'));
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
        $loan = Loan::findOrFail($id);
	$input = array_except(Input::All(), '_method');

	$loan->update($input);

	return Redirect::route('admin.loan.types.index')->withFlashSuccess('Company Loans data was successfully edited.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $loan = Loan::findOrFail($id)->delete();

	return Redirect::route('admin.loan.company.index')->withFlashSuccess('Company Loans data was successfully deleteds.');
    }
}
