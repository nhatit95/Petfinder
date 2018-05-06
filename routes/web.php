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

	Route::group(['prefix' => 'role'], function(){
		Route::get('',[
			'uses' => 'RoleController@index',
			'as'   => 'admin.role.index'
		]);

		Route::get('add',[
			'uses' => 'RoleController@getAdd',
			'as'   => 'admin.role.add'
		]);

		Route::post('add',[
			'uses' => 'RoleController@postAdd',
			'as'   => 'admin.role.add'
		]);

		Route::get('edit/{id}',[
					'uses' => 'RoleController@getEdit',
					'as'   => 'admin.role.edit'
		]);

		Route::post('edit/{id}',[
					'uses' => 'RoleController@postEdit',
					'as'   => 'admin.role.edit'
		]);

		Route::get('del/{id}',[
					'uses' => 'RoleController@del',
					'as'   => 'admin.role.del'
		]);

	});

	Route::group(['prefix' => 'event_cat'], function(){
		Route::get('',[
			'uses' => 'EventCatController@index',
			'as'   => 'admin.event_cat.index'
		]);

		Route::get('add',[
			'uses' => 'EventCatController@getAdd',
			'as'   => 'admin.event_cat.add'
		]);

		Route::post('add',[
			'uses' => 'EventCatController@postAdd',
			'as'   => 'admin.event_cat.add'
		]);

		Route::get('edit/{id}',[
			'uses' => 'EventCatController@getEdit',
			'as'   => 'admin.event_cat.edit'
		]);

		Route::post('edit/{id}',[
			'uses' => 'EventCatController@postEdit',
			'as'   => 'admin.event_cat.edit'
		]);

		Route::get('del/{id}',[
			'uses' => 'EventCatController@del',
			'as'   => 'admin.event_cat.del'
		]);

	});

	Route::group(['prefix' => 'message'], function(){
		Route::get('',[
			'uses' => 'MessageController@index',
			'as'   => 'admin.message.index'
		]);

		Route::get('add',[
			'uses' => 'MessageController@getAdd',
			'as'   => 'admin.message.add'
		]);

		Route::post('add',[
			'uses' => 'MessageController@postAdd',
			'as'   => 'admin.message.add'
		]);

		Route::get('edit/{id}',[
			'uses' => 'MessageController@getEdit',
			'as'   => 'admin.message.edit'
		]);

		Route::post('edit/{id}',[
			'uses' => 'MessageController@postEdit',
			'as'   => 'admin.message.edit'
		]);

		Route::get('del/{id}',[
			'uses' => 'MessageController@del',
			'as'   => 'admin.message.del'
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

Route::group(['namespace' => 'petfinder', 'prefix' => ''], function(){
	Route::get('home', [
		'uses'  => 'IndexNewsController@index',
		'as'	=> 'petfinder.news.index'
	]);

	Route::get('add', [
		'uses'  => 'NewsController@add',
		'as'	=> 'petfinder.news.add'
	]);

	Route::get('{slug}-{id}.html', [
		'uses'  => 'NewsController@detail',
		'as'	=> 'petfinder.news.detail'
	]);
	
	Route::get('tin-tuc/{slug}-{id}', [
		'uses'  => 'NewsController@cat',
		'as'	=> 'petfinder.news.cat'
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