<?php

// use Symfony\Component\Routing\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//   example for middleware
	// Route::get('about', ['middleware' => 'auth','uses' => 'PageController@about']); 
	
//   example for controller
	// Route::get('contact', 'PageController@contact'); 
	



	// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('articles', 'ArticlesController');
// Route::get('contact', 'Auth\LoginController@contact');
Route::get('about', 'PageController@about');
Route::get('contact', 'PageController@contact');
Route::get('users/{user}/articles', 'PageController@user');
// Route::get('articles', 'ArticlesController@index');
// Route::get('articles/create', 'ArticlesController@create');
// Route::get('articles/{id}', 'ArticlesController@show');
// Route::post('articles', 'ArticlesController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('foo', ['middleware' => 'manager', function() {
	return 'manager';
}]);