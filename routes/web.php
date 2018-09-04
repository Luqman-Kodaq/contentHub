<?php

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
Auth::routes();

Route::prefix('manage')->middleware('role:superadministrator|administrator|editor|author|contributor')->group(function () {
	Route::get('/', 'ManageController@index');
	Route::get('/dashboard', 'ManageController@dashboard')->name('manage.dashboard');
	Route::resource('/users', 'UserController');
	Route::resource('/permissions', 'PermissionController', ['except' => 'destroy']);
	Route::resource('/roles', 'RoleController', ['except' => 'destroy']);
	Route::resource('/posts', 'PostController');
	Route::resource('/categories', 'CategoryController');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
	Route::resource('/admins', 'AdminController');
});

Route::get('/home', 'HomeController@index')->name('home');

// Pages
Route::get('/', 'PagesController@getIndex')->name('/');
Route::get('about', 'PagesController@about')->name('about');


Route::prefix('/admin')->group(function()
	{
Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login', 'Auth\AdminLoginController@Login')->name('admin.login.submit');
});

// Blog
Route::get('blog', 'BlogController@getIndex')->name('blog.index');
