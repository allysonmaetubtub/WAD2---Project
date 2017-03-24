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

Route::get('/', function () {
    return redirect()->route('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('user/{id}', 'UserController@show')->name('profile');
Route::get('user/{id}/edit', 'UserController@edit')->name('profile.edit');
Route::put('user/{id}', 'UserController@update')->name('profile.update');

Route::resource('students', 'StudentController');
//Route::resource('sections', 'SectionController');
