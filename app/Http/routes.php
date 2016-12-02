<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
session_start();
Route::get('/', function()
{
	return view('kids.index');
});

Route::get('/about',function()
{
	return view('kids.aboutUs');
});

Route::get('/portfolio',function()
{
	return view('kids.portfolio');
});

Route::get('/login',function()
{
	return view('auth.login');
});
Route::get('/register',function()
{
	return view('auth.register');
});

Route::get('/home', 'HomeController@index');

Route::get('/stat/{id}', 'StatController@find');


// --------------------------LOGIN AND REGISTER---------------------------------------
Route::post('/user-save', 'UserController@register');
Route::post('/user-check', 'UserController@login');
Route::get('/logout', 'UserController@logout');
Route::get('/hekim/{id}', 'UserController@findHekim');
if(isset($_SESSION['userSistemde'])){
	Route::get('/profile', 'UserController@myProfile');
	Route::post('/profile/update', 'UserController@update');
	Route::post('/comment-save', 'UserController@comment');
}

// --------------------------ADMİN PANEL ROUTELERİ---------------------------------------
Route::get('/admin/login', 'AdminController@login');
Route::post('/admin/check', 'AdminController@checkLogin');

if (isset($_SESSION['adminTrue'])) {
	Route::get('/admin-panel','AdminController@index');
	Route::get('/admin/logout','AdminController@logout');
	Route::get('/admin/users','AdminController@users');
	Route::get('/admin/showuser/{id}','AdminController@show');
	Route::get('/admin/ban/{id}','AdminController@ban');
	Route::get('/admin/articles','AdminController@meqale');
	Route::get('/admin/show/{id}','AdminController@showMeqale');
	Route::get('/admin/destroy/{id}','AdminController@destroyMeqale');
	Route::get('/admin/hekimler','AdminController@hekimler');
	Route::get('/admin/showh/{id}','AdminController@showHekimler');
	Route::get('/admin/destroyh/{id}','AdminController@destroyHekim');
	Route::get('/admin/add','AdminController@addHekim');
	Route::post('/admin/addhekim','AdminController@saveHekim');
}

// --------------------------HEKİM PANEL ROUTELERİ---------------------------------------
Route::get('/hekimler', 'HekimController@index');
Route::get('/hekimler/login',function(){
	return view('logins.hekim');
});
Route::post('/hekimler/checklogin','HekimController@login');
Route::get('/hekimler/logout','HekimController@logout');


if(isset($_SESSION['hekimTrue'])){
	Route::get('/hekim-panel','HekimController@index');
	Route::get('/hekimler-meqale','HekimController@meqale');
	Route::get('/hekimler-newMeqale','HekimController@newMeqalePage');
	Route::get('/hekim-delete-meqale/{id}','MeqaleController@destroy');
	Route::post('/hekimler/store','HekimController@newMeqale');
	Route::get('/hekim-show-meqale/{id}','MeqaleController@show');
	Route::get('/hekim-edit-meqale/{id}','MeqaleController@edit');
	Route::post('/hekim-update-meqale/{id}', 'MeqaleController@update');
	Route::get('/hekimler-settings/{id}','HekimController@settingsPage');
	Route::post('/hekimler-save-changes','HekimController@saveSettings');

}


Route::get('/meqale','MeqaleController@meqaleler');
