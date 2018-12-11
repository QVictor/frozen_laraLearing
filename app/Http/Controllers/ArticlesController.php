<?php

namespace App\Http\Controllers;
// Импорт модели
use Carbon\Carbon;
use App\Article;
// use Illuminate\Http\Request;
use Request;
// use Symfony\Component\HttpFoundation\Request;

class ArticlesController extends Controller
{
	public function index()
	{
		$articles = Article::latest('published_at')->published()->get();
		
		return view('articles.index',compact('articles'));
	}
	public function show($id)
	{
		$article = Article::findOrFail($id);
		dd($article->published_at);
		// dd($article);
		// if (is_null($article)) {
		// 	about('404');
		// }			
		return view('articles.show',compact('article'));
	}
	public function create()
	{
		return view('articles.create');
	}															

	// сохранить новую статью
	public function store()
	{
		// получить все данные из формы
		$newArticle = Request::all();
		// $input['published_at'] = Carbon::now();
		// $article = new Article(['title' => ]);
		// Article->title = input['title'];
		$newArticle['published_at'] = Carbon::createFromFormat('Y-m-d', $newArticle['published_at']);
	
		Article::create($newArticle);
		

		return redirect('articles');
	}
}
