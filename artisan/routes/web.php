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

Route::get('facture/{n}', function($n) { 
    return view('facture')->withNumero($n); 
})->where('n', '[0-9]+');

Route::get('/', 'WelcomeController@index');

Route::get('article/{n}', 'ArticleController@show')->where('n', '[0-9]+');

Route::get('users', 'UsersController@getInfos');
Route::post('users', 'UsersController@postInfos');

Route::get('contact', 'ContactController@getForm');
Route::post('contact', 'ContactController@postForm');

Route::get('email', 'EmailController@getForm');
Route::post('email', ['uses' => 'EmailController@postForm', 'as' => 'storeEmail']);

Route::resource('user', 'UserController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
