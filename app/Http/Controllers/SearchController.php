<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;

class SearchController extends Controller
{
	public function users()
	{
		$search_thing = Input::get('q');
		$search_results = User::where('name', 'like', '%' . $search_thing . '%')->paginate(10);

		return view('search.users', compact('search_results', 'search_thing'));
	}

	public function groups()
	{
		$search_thing = Input::get('q');
		$search_resoults = Group::where('name', 'like', "%" . $search_thing . '%')->paginate(10);

		return view('search.groups', compact('search_resoults', 'search_thing'));
	}
}
