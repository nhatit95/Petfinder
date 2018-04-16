<?php
Route::pattern('id', '([0-9])*');
Route::pattern('slug', '(.*)');

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

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'auth'], function(){
	Route::get('', [
		'uses'  => 'IndexController@index',
		'as'	=> 'admin.index.index'
	]);

	Route::group(['prefix' => 'cat'], function(){
		Route::get('',[
			'uses' => 'CatController@index',
			'as'   => 'admin.cat.index'
		]);

		Route::get('add',[
			'uses' => 'CatController@getAdd',
			'as'   => 'admin.cat.add'
		]);

		Route::post('add',[
			'uses' => 'CatController@postAdd',
			'as'   => 'admin.cat.add'
		]);

		Route::get('edit/{id}',[
					'uses' => 'CatController@getEdit',
					'as'   => 'admin.cat.edit'
		]);

		Route::post('edit/{id}',[
					'uses' => 'CatController@postEdit',
					'as'   => 'admin.cat.edit'
		]);

		Route::get('del/{id}',[
					'uses' => 'CatController@del',
					'as'   => 'admin.cat.del'
		]);
	});

	Route::group(['prefix' => 'user'], function(){
		Route::get('',[
			'uses' => 'UserController@index',
			'as'   => 'admin.user.index'
		])->middleware('test:admin');

		Route::get('add',[
			'uses' => 'UserController@getAdd',
			'as'   => 'admin.user.add'
		]);

		Route::post('add',[
			'uses' => 'UserController@postAdd',
			'as'   => 'admin.user.add'
		]);

		Route::get('edit/{id}',[
					'uses' => 'UserController@getEdit',
					'as'   => 'admin.user.edit'
		]);

		Route::post('edit/{id}',[
					'uses' => 'UserController@postEdit',
					'as'   => 'admin.user.edit'
		]);

		Route::get('del/{id}',[
					'uses' => 'UserController@del',
					'as'   => 'admin.user.del'
		]);
	});

	Route::group(['prefix' => 'news'], function(){
		Route::get('',[
			'uses' => 'NewsController@index',
			'as'   => 'admin.news.index'
		]);

		Route::get('add',[
			'uses' => 'NewsController@getAdd',
			'as'   => 'admin.news.add'
		]);

		Route::post('add',[
			'uses' => 'NewsController@postAdd',
			'as'   => 'admin.news.add'
		]);

		Route::get('edit/{id}',[
			'uses' => 'NewsController@getEdit',
			'as'   => 'admin.news.edit'
		]);

		Route::post('edit/{id}',[
			'uses' => 'NewsController@postEdit',
			'as'   => 'admin.news.edit'
		]);

		Route::get('del/{id}',[
					'uses' => 'NewsController@del',
					'as'   => 'admin.news.del'
		]);

		Route::get('search',[
			'uses' => 'NewsController@search',
			'as'   => 'admin.news.search'
		]);
	});
});

Route::group(['namespace' => 'Cnews', 'prefix' => ''], function(){
	Route::get('', [
		'uses'  => 'IndexNewsController@index',
		'as'	=> 'cnews.news.index'
	]);

	Route::get('add', [
		'uses'  => 'NewsController@add',
		'as'	=> 'cnews.news.add'
	]);

	Route::get('{slug}-{id}.html', [
		'uses'  => 'NewsController@detail',
		'as'	=> 'cnews.news.detail'
	]);
	
	Route::get('tin-tuc/{slug}-{id}', [
		'uses'  => 'NewsController@cat',
		'as'	=> 'cnews.news.cat'
	]);

	
});

Route::group(['namespace' => 'Auth'], function(){
	// Route::get('login',[
	// 	'uses'  => 'AuthController@getLogin',
	// 	'as'   => 'Auth.auth.login',
	// ]);
	Route::get('login',[
		'uses'  => 'AuthController@getLogin',
		'as'   => 'login',
	]);
	Route::post('login',[
		'uses'  => 'AuthController@postLogin',
		'as'   => 'auth.auth.login',
	]);

	Route::get('logout',[
		'uses'  => 'AuthController@logout',
		'as'   => 'logout',
	]);
});