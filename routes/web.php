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
Route::get('/evaluation', 'HomeController@evaluation')->name('evaluation');
Route::get('/tutor/evaluation', 'TutorController@evaluation')->name('tutor-evaluation');
Route::get('/tutor/assistence', 'TutorController@assistence')->name('tutor-assistances');
Route::get('/tutor/cycle', 'TutorController@cycle')->name('tutor-cycle');
Route::get('/tutor/student', 'TutorController@student')->name('tutor-student');