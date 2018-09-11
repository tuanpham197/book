<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('home','PageController@trangChu');

Route::get('admin/login','UserController@getLogin');
Route::post('admin/login','UserController@postLogin');

Route::get('admin/logout','UserController@getLogout');


Route::get('delete','PageController@index');
Route::post('delete', 'PageController@destroy');

Route::get('edit',function(){
	return "tuan";
});


Route::group(['prefix' => 'admin','middleware' => 'adminLogin'], function(){
	Route::group(['prefix' => 'book'],function(){
		Route::get('list','BookController@getList');

		Route::get('add','BookController@getAdd');

		Route::post('add','BookController@postAdd');

		Route::patch('edit','BookController@postEdit');
	});
	Route::group(['prefix' => 'user'],function(){
		Route::get('list','UserController@getList');

		Route::get('add','UserController@getAdd');

		Route::post('add','UserController@postAdd');

		Route::patch('edit','UserController@postEdit');
	});
}); 

Route::get('register','PageController@getRegister');

Route::post('register','PageController@postRegister');


Route::group(['prefix' => 'member','middleware' => 'MemberLogin'], function(){
	Route::group(['prefix' => 'book'],function(){
		Route::get('list','MemberController@getList');

		Route::get('add','MemberController@getAdd');

		Route::post('add','MemberController@postAdd');

		Route::patch('edit','MemberController@postEdit');

		Route::patch('delete','MemberController@destroy');
	});
}); 


