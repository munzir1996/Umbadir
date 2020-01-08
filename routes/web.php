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

Route::get('/', 'HomeController@index')->name('index');

Route::get('/about', 'HomeController@about')->name('about');

Route::get('/goals', 'HomeController@goal')->name('goal');

Route::get('/galleries', 'HomeController@gallery')->name('gallery');

Route::get('/contacts', 'HomeController@contact')->name('contact');

Route::get('/admin', function () {
    return view('admin.index');
});

// Route::prefix('admin')->middleware('auth')->group(function () {
//     Route::resource('users', 'admins\UserController');
// });

