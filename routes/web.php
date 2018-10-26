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

Route::redirect('/','/login',301);
Route::get('idea','IdeaController@getIdeas');

Route::post('idea','IdeaController@saveIdea');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('cycles');
Route::get('/assistence', 'HomeController@assistence')->name('assistence');
