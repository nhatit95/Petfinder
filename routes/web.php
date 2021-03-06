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

	Route::group(['prefix' => 'event'], function(){
		Route::get('',[
			'uses' => 'EventController@index',
			'as'   => 'admin.event.index'
		]);

		Route::get('add',[
			'uses' => 'EventController@getAdd',
			'as'   => 'admin.event.add'
		]);

		Route::post('add',[
			'uses' => 'EventController@postAdd',
			'as'   => 'admin.event.add'
		]);

		Route::get('edit/{id}',[
			'uses' => 'EventController@getEdit',
			'as'   => 'admin.event.edit'
		]);

		Route::post('edit/{id}',[
			'uses' => 'EventController@postEdit',
			'as'   => 'admin.event.edit'
		]);

		Route::get('del/{id}',[
			'uses' => 'EventController@del',
			'as'   => 'admin.event.del'
		]);

	});

	Route::group(['prefix' => 'pet_cat'], function(){
		Route::get('',[
			'uses' => 'PetCatController@index',
			'as'   => 'admin.pet_cat.index'
		]);

		Route::get('add',[
			'uses' => 'PetCatController@getAdd',
			'as'   => 'admin.pet_cat.add'
		]);

		Route::post('add',[
			'uses' => 'PetCatController@postAdd',
			'as'   => 'admin.pet_cat.add'
		]);

		Route::get('edit/{id}',[
			'uses' => 'PetCatController@getEdit',
			'as'   => 'admin.pet_cat.edit'
		]);

		Route::post('edit/{id}',[
			'uses' => 'PetCatController@postEdit',
			'as'   => 'admin.pet_cat.edit'
		]);

		Route::get('del/{id}',[
			'uses' => 'PetCatController@del',
			'as'   => 'admin.pet_cat.del'
		]);

	});

	Route::group(['prefix' => 'pet'], function(){
		Route::get('',[
			'uses' => 'PetController@index',
			'as'   => 'admin.pet.index'
		]);

		Route::get('add',[
			'uses' => 'PetController@getAdd',
			'as'   => 'admin.pet.add'
		]);

		Route::post('add',[
			'uses' => 'PetController@postAdd',
			'as'   => 'admin.pet.add'
		]);

		Route::get('edit/{id}',[
			'uses' => 'PetController@getEdit',
			'as'   => 'admin.pet.edit'
		]);

		Route::post('edit/{id}',[
			'uses' => 'PetController@postEdit',
			'as'   => 'admin.pet.edit'
		]);

		Route::get('del/{id}',[
			'uses' => 'PetController@del',
			'as'   => 'admin.pet.del'
		]);

	});

	Route::group(['prefix' => 'post_cat'], function(){
		Route::get('',[
			'uses' => 'PostCatController@index',
			'as'   => 'admin.post_cat.index'
		]);

		Route::get('add',[
			'uses' => 'PostCatController@getAdd',
			'as'   => 'admin.post_cat.add'
		]);

		Route::post('add',[
			'uses' => 'PostCatController@postAdd',
			'as'   => 'admin.post_cat.add'
		]);

		Route::get('edit/{id}',[
			'uses' => 'PostCatController@getEdit',
			'as'   => 'admin.post_cat.edit'
		]);

		Route::post('edit/{id}',[
			'uses' => 'PostCatController@postEdit',
			'as'   => 'admin.post_cat.edit'
		]);

		Route::get('del/{id}',[
			'uses' => 'PostCatController@del',
			'as'   => 'admin.post_cat.del'
		]);

	});

		Route::group(['prefix' => 'service_cat'], function(){
		Route::get('',[
			'uses' => 'ServiceCatController@index',
			'as'   => 'admin.service_cat.index'
		]);

		Route::get('add',[
			'uses' => 'ServiceCatController@getAdd',
			'as'   => 'admin.service_cat.add'
		]);

		Route::post('add',[
			'uses' => 'ServiceCatController@postAdd',
			'as'   => 'admin.service_cat.add'
		]);

		Route::get('edit/{id}',[
			'uses' => 'ServiceCatController@getEdit',
			'as'   => 'admin.service_cat.edit'
		]);

		Route::post('edit/{id}',[
			'uses' => 'ServiceCatController@postEdit',
			'as'   => 'admin.service_cat.edit'
		]);

		Route::get('del/{id}',[
			'uses' => 'ServiceCatController@del',
			'as'   => 'admin.service_cat.del'
		]);

	});

	Route::group(['prefix' => 'service'], function(){
		Route::get('',[
			'uses' => 'ServiceController@index',
			'as'   => 'admin.service.index'
		]);

		Route::get('add',[
			'uses' => 'ServiceController@getAdd',
			'as'   => 'admin.service.add'
		]);

		Route::post('add',[
			'uses' => 'ServiceController@postAdd',
			'as'   => 'admin.service.add'
		]);

		Route::get('edit/{id}',[
			'uses' => 'ServiceController@getEdit',
			'as'   => 'admin.service.edit'
		]);

		Route::post('edit/{id}',[
			'uses' => 'ServiceController@postEdit',
			'as'   => 'admin.service.edit'
		]);

		Route::get('del/{id}',[
			'uses' => 'ServiceController@del',
			'as'   => 'admin.service.del'
		]);

	});

	Route::group(['prefix' => 'post'], function(){
		Route::get('',[
			'uses' => 'PostController@index',
			'as'   => 'admin.post.index'
		]);

		Route::get('add',[
			'uses' => 'PostController@getAdd',
			'as'   => 'admin.post.add'
		]);

		Route::post('add',[
			'uses' => 'PostController@postAdd',
			'as'   => 'admin.post.add'
		]);

		Route::get('edit/{id}',[
			'uses' => 'PostController@getEdit',
			'as'   => 'admin.post.edit'
		]);

		Route::post('edit/{id}',[
			'uses' => 'PostController@postEdit',
			'as'   => 'admin.post.edit'
		]);

		Route::get('del/{id}',[
			'uses' => 'PostController@del',
			'as'   => 'admin.post.del'
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

	
});

Route::group(['namespace' => 'petfinder', 'prefix' => ''], function(){
	Route::get('', [
		'uses'  => 'IndexPetfinderController@index',
		'as'	=> 'petfinder.petfinder.index'
	]);

	Route::get('finder', [
		'uses' => 'FinderController@index',
		'as'   => 'petfinder.petfinder.finder'
	]);

	Route::post('finder', [
		'uses' => 'FinderController@postindex',
		'as'   => 'petfinder.petfinder.finder'
	]);


	Route::get('blog', [
		'uses' => 'BlogController@index',
		'as'   => 'petfinder.petfinder.blog'
	]);

	Route::get('detail', [
		'uses' => 'DetailController@index',
		'as'   => 'petfinder.petfinder.detail'
	]);	

	Route::get('servicedetail/{id}', [
		'uses' => 'ServiceDetailController@show',
		'as'   => 'petfinder.petfinder.servicedetail'
	]);	

	Route::get('petdetail/{id}', [
		'uses' => 'PetDetailController@show',
		'as'   => 'petfinder.petfinder.petdetail'
	]);	

	Route::get('blogdetail/{id}', [
		'uses' => 'BlogDetailController@show',
		'as'   => 'petfinder.petfinder.blogdetail'
	]);

	Route::get('petregister/{id}/{pet_id}',[
		'uses'  => 'PetRegisterController@getIndex',
		'as'   => 'petfinder.petfinder.petregister',
	]);

	Route::get('serviceregister/{id}/{service_id}',[
		'uses'  => 'ServiceRegisterController@getIndex',
		'as'   => 'petfinder.petfinder.serviceregister',
	]);

	Route::post('search_ajax/{breed}/{age}/{gender}/{city}', [
		'uses' => 'AjaxController@search',
		'as'   => 'petfinder.petfinder.ajaxsearch',
	]);


	Route::group(['prefix' => 'profile'], function(){
		Route::get('',[
			'uses'  => 'ProfileController@index',
			'as'   => 'petfinder.profile.index',
		]);

		//GUEST
		Route::get('guestprofile/{id}',[
			'uses'  => 'GuestController@getIndex',
			'as'   => 'petfinder.profile.guestprofile',
		]);

		Route::post('guestprofile/{id}',[
			'uses'  => 'GuestController@postIndex',
			'as'   => 'petfinder.profile.guestprofile',
		]);
		Route::post('guestmessageadd',[
			'uses'  => 'GuestController@postGuestMessageAdd',
			'as'   => 'petfinder.profile.guestmessageadd',
		]);
		// Route::get('guestmessageadd',[
		// 	'uses'  => 'GuestController@getGuestMessageAdd',
		// 	'as'   => 'petfinder.profile.guestmessageadd',
		// ]);
// PET
		Route::get('petadd',[
			'uses'  => 'ProfileController@getPetAdd',
			'as'   => 'petfinder.profile.petadd',
		]);

		Route::post('petadd',[
			'uses'  => 'ProfileController@postPetAdd',
			'as'   => 'petfinder.profile.petadd',
		]);

		Route::get('petdel/{id}',[
			'uses' => 'ProfileController@petDel',
			'as'   => 'petfinder.profile.petdel'
		]);

		Route::get('petedit/{id}',[
			'uses' => 'ProfileController@getPetEdit',
			'as'   => 'petfinder.profile.petedit'
		]);

		Route::post('petedit/{id}',[
			'uses' => 'ProfileController@postPetEdit',
			'as'   => 'petfinder.profile.petedit'
		]);

// POST
		Route::get('postadd',[
			'uses'  => 'ProfileController@getPostAdd',
			'as'   => 'petfinder.profile.postadd',
		]);

		Route::post('postadd',[
			'uses'  => 'ProfileController@postPostAdd',
			'as'   => 'petfinder.profile.postadd',
		]);

		Route::get('postdel/{id}',[
			'uses' => 'ProfileController@postDel',
			'as'   => 'petfinder.profile.postdel'
		]);

		Route::get('postedit/{id}',[
			'uses' => 'ProfileController@getPostEdit',
			'as'   => 'petfinder.profile.postedit'
		]);

		Route::post('postedit/{id}',[
			'uses' => 'ProfileController@postPostEdit',
			'as'   => 'petfinder.profile.postedit'
		]);

//MESSAGE
		Route::get('messageadd',[
			'uses'  => 'ProfileController@getMessageAdd',
			'as'   => 'petfinder.profile.messageadd',
		]);

		Route::post('messageadd',[
			'uses'  => 'ProfileController@postMessageAdd',
			'as'   => 'petfinder.profile.messageadd',
		]);

		Route::get('messagedel/{id}',[
			'uses' => 'ProfileController@messageDel',
			'as'   => 'petfinder.profile.messagedel'
		]); 


	
	});
	// Route::get('add', [
	// 	'uses'  => 'NewsController@add',
	// 	'as'	=> 'petfinder.petfinder.add'
	// ]);

	// Route::get('{slug}-{id}.html', [
	// 	'uses'  => 'NewsController@detail',
	// 	'as'	=> 'petfinder.petfinder.detail'
	// ]);
	
	// Route::get('tin-tuc/{slug}-{id}', [
	// 	'uses'  => 'NewsController@cat',
	// 	'as'	=> 'petfinder.petfinder.cat'
	// ]);

	
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

	Route::get('register',[
		'uses'  => 'AuthController@getRegister',
		'as'   => 'auth.auth.register',
	]);

	Route::post('register',[
		'uses'  => 'AuthController@postRegister',
		'as'   => 'auth.auth.register',
	]);

	Route::get('logout',[
		'uses'  => 'AuthController@logout',
		'as'   => 'auth.auth.logout',
	]);
});



