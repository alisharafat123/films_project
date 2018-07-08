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
Route::get('films', 'HomeController@posts')->name('posts');
Auth::routes();

Route::post('films', 'HomeController@postFilms')->name('films.post');

Route::get('films/{slug}', 'HomeController@show')->name('films.show');
Route::get('/home', 'HomeController@index');
Route::get('films_list', 'FilmsController@index');
Route::get('create_films', 'FilmsController@create');
Route::get('create_genre', 'FilmsController@create_genre');
Route::get('genre', 'FilmsController@genre');
Route::post('post_genre', 'FilmsController@create_genre');
Route::post('post_film', 'FilmsController@create');