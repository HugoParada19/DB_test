<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class personTableController extends Controller
{
	public function index()
	{
		return view('services/cTable')->with('done', false);
	}

	public function inputDt(Request $request)
	{
		$person = new Person;
		$person->name = $request->name;
		$person->dob = $request->dob;
		$person->age_groupFK = $request->age_groupFK;
		$person->save();

		return view('services/cTable')->with('done', true);
	}
}
