<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Person;

class personController extends Controller
{
	public function index()
	{
		$people = DB::table('people')->get();
		return view('services/peopleTable', compact('people'));
	}

	public function destroy($id)
	{
		Person::find($id)->delete();

		return redirect()->back();
	}
}
