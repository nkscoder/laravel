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
    return view('welcome');
});

Route::get('/students/show/', 'StudentsController@show');

Route::post('/students/create/', 'StudentsController@create');
//Route::get('about','StudentsController@show', function()
//{
//    return View::make('pages.about');
//});

//Route::post('register', 'Auth\RegisterController');

Route::post('register', 'Auth\RegisterController@register');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
