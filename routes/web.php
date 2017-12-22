<?php

//use Illuminate\Auth\Middleware\Authenticate;
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


Route::get('/', function(){
	return view('welcome');
})->middleware('nologin');



Route::get('/home', 'HomeController@index')->name('home');



Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function(){

	//Forma general de hacerlo..
	//Route::resource('users','UserController');
	//Forma parcial..
	Route::group(['prefix'=>'users'],function(){
		Route::get('/',[
			'uses'=>'UserController@index',
			'as'=>'users.index'
		]);
		Route::get('create',[
			'uses'=>'UserController@create',
			'as'=>'users.create'
		]);
		Route::post('/',[
			'uses'=>'UserController@store',
			'as'=>'users.store'
		]);
		Route::get('{user}/edit',[
			'uses'=>'UserController@edit',
			'as'=>'users.edit'
		]);
		Route::put('{user}',[
			'uses'=>'UserController@update',
			'as'=>'users.update'
		]);
		//Independiente ya que no necesita una vista
		Route::get('{id}/destroy',[
			'uses'=>'UserController@destroy',
			'as'=>'users.destroy'
		]);
	});


	//Forma general con excepciones...
	Route::resource('categories', 'CategorieController', ['except' => [
		'destroy','show'
	]]);

	Route::get('categories/{id}/destroy',[
		'uses'=>'CategorieController@destroy',
		'as'=>'categories.destroy'
	]);
});



Route::group(['prefix'=>'member','middleware'=>'auth'],function(){

	//Route::resource('publications','PublicationController');
	Route::group(['prefix' => 'publications'],function(){
		Route::get('create', [
			'uses' => 'PublicationController@create',
			'as' => 'publications.create'
		]);
		Route::post('/', [
			'uses' => 'PublicationController@store',
			'as' => 'publications.store'
		]);
		Route::get('{publication}', [
			'uses' => 'PublicationController@show',
			'as' => 'publications.show'
		]);
	});


	Route::post('comments/store',[
		'uses'=>'CommentController@store',
		'as'=>'comments.store'
	]);
	Route::post('responses/store',[
		'uses'=>'ResponseController@store',
		'as'=>'responses.store'
	]);
});



Route::group(['prefix' => 'profile', 'middleware' => 'auth'],function(){
	Route::get('{user}', [
		'uses' => 'UserController@show',
		'as' => 'profile.show'
	]);

	Route::get('{user}/edit',[
		'uses' => 'ProfileController@edit',
		'as' => 'profile.edit'
	]);
	Route::put('{user}', [
		'uses' => 'ProfileController@update',
		'as' => 'profile.update'
	]);
});



Auth::routes();

