<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\person;

class mainController extends Controller
{
	public function index()
	{
		$person = DB::table('people')->get();
		return view('main', ['person' => $person]);
	}

	public function destroy($id)
	{
		person::find($id)->delete();

		return redirect()->back();
	}

	public function edit($id)
	{
		$person = person::find($id);

		return view('edit', compact('person'));
	}

	public function applyEdits($id, Request $request)
	{
		$person = person::find($id);

		$person->dob = $request->dob;
		$person->name = $request->name;
		if ($request->age_groupFK != null)
			$person->age_groupFK = $request->age_groupFK;
		$person->save();

		return redirect()->back();
	}
}
