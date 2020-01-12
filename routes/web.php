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


Route::get('/', 'HomeController@index')->name('index');

Route::get('/about', 'HomeController@about')->name('about');

Route::get('/goals', 'HomeController@goal')->name('goal');

Route::get('/galleries', 'HomeController@gallery')->name('gallery');

Route::get('/contacts', 'HomeController@contact')->name('contact');

Auth::routes();

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', 'admins\HomeController@index')->name('admin');
    Route::resource('users', 'admins\UserController');
    Route::resource('scopes', 'admins\ScopeController');
    Route::resource('projects', 'admins\ProjectController');
    Route::resource('goals', 'admins\GoalController');
    Route::resource('pics', 'admins\PicController');
    Route::resource('settings', 'admins\SettingController');
});

