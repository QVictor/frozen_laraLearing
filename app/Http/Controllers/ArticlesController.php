<?php

namespace App\Http\Controllers;
// Импорт модели
use Carbon\Carbon;
use App\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;

// use Symfony\Component\HttpFoundation\Request;

class ArticlesController extends Controller
{
	// Только зарегистрированным пользователям
	public function __construct()
	{
		$this->middleware('auth', ['except' => 'index']);
	}
	
	public function index()
	{	
		/* return \Auth::user()->articles()->get();
		return \Auth::user()->name; */
		$articles = Article::latest('published_at')->published()->get();
		
		return view('articles.index',compact('articles'));
	}
	
	public function show(Article $article)
	{
		// dd($article);
		// $article = Article::findOrFail($id);
		/* dd($article->published_at);
		dd($article);
		if (is_null($article)) {
			about('404');
		}		 */	
		return view('articles.show',compact('article'));
	}

	public function welcome(Article $article)
	{
		return view('welcome',compact('article'));
	}

	public function create()
	{
		// $tags = Tag::lists('name');
		return view('articles.create');
	}															

	// сохранить новую статью (валидация в скобках)
	public function store(ArticleRequest $request)
	{
	/* 	validation without create class
		$this->validate($request, ['title' => 'required', 'body' => 'required']);
		
		// получить все данные из формы
		$newArticle = $request->all();
		$input['published_at'] = Carbon::now();
		$article = new Article(['title' => ]);
		Article->title = input['title'];
        $newArticle['published_at'] = Carbon::createFromFormat('Y-m-d', $newArticle['published_at']);
		$newArticle['user_id'] = \Auth::user()->id;
		dd($newArticle);							
		Article::create($newArticle); */


		// $article = new Article($request->all());
		// \Auth::user()->articles; /* collection - all articles */
		// \Auth::user()->articles()->save($article);

		\Auth::user()->articles()->create($request->all());
		flash()->success('flash_mes');	
		// flash()->overlay('flash_message','article');
		// session()->flash('flash_message',true);
		return redirect('articles');
	}
	public function edit(Article $article)
	{
		return view('articles.edit',compact('article'));
	}
	public function update(Article $article, ArticleRequest $request)
	{
		$article->update($request->all());
		return redirect('articles');		
	}

}
