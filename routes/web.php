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

Route::get('/', 'Auth\LoginController@index');
Route::get('posts', 'HomeController@posts')->name('posts');
Auth::routes();

Route::post('posts', 'HomeController@postPost')->name('posts.post');

Route::get('posts/{id}', 'HomeController@show')->name('posts.show');
Route::get('/home', 'HomeController@index');
Route::get('films_list', 'FilmsController@index');
Route::get('create_films', 'FilmsController@create');
//Route::get('/check_regNo', 'StudentsController@check_registrationExist');
Route::post('post_film', 'FilmsController@create');