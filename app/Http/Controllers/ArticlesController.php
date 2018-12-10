<?php

namespace App\Http\Controllers;

// Импорт модели
use App\Article; 
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
	public function index()
	{
		$articles = Article::all();
		
		return view('articles.index',compact('articles'));
	}
	public function show($id)
	{
		$article = Article::findOrFail($id);
		// dd($article);
		// if (is_null($article)) {
		// 	about('404');
		// }
		return view('articles.show',compact('article'));
	}
}
