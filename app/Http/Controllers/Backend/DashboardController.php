<?php namespace App\Http\Controllers\Backend;

use Input;
use App\Kabupaten;
use App\Http\Controllers\Controller;

/**
 * Class DashboardController
 * @package App\Http\Controllers\Backend
 */
class DashboardController extends Controller {
	/**
	 * @return \Illuminate\View\View
	 */
	public function index()
	{
		return view('backend.dashboard');
	}
}
