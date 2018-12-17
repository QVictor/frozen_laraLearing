<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function contact()
	{
		$name = 'contact name';
		return view('pages.contact', compact('name'));
	}
	public function about()
	{
		$people = ['Taylor Otwell', 'Dayle Rees', 'Eric Barnes'];
		return view('about.about',compact('people'));
	}
	public function user()
	{
		// $user = App\User::where('name','John Doe')->first();
		// return view($user);
		// $articles = '';
		return view('articles.index',compact('articles'));
	}
}
