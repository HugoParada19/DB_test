<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Person;
use App\Models\age;

class editPersonController extends Controller
{
	public function index($id)
	{
		$person = Person::find($id);
		$gaps = age::pluck('age_group');

		return view('services/editTable', ['person' => $person, 'gaps' => $gaps]);
	}

	public function applyEd(Request $request, $id)
	{
		$person = Person::find($id);

		$person->name = $request->name;
		$person->dob = $request->dob;
		if ($request->age_groupFK != null)
			$person->age_groupFK = $request->age_groupFK;
		$person->save();

		$people = DB::table('people')->get();

		return redirect('people');
	}
}
