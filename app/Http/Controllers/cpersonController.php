<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\person;
use DateTime;

class cpersonController extends Controller
{
	public function index()
	{
		return view('ctable', ['present' => false]);
	}

	public function inputDt(Request $request)
	{
		$sperson = new person;
		$sperson->dob = $request->dob;
		$sperson->name = $request->name;
		$sperson->age_groupFK = $request->age_groupFK;
		$sperson->save();

		return view('ctable', ['present' => true]);
	}
}
