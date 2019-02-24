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

//Blog
Route::get('blog',['uses'=>'BlogController@getIndex','as'=>'blog.index']);
Route::get('blog/{slug}',['as'=>'blog.single','uses'=>'BlogController@getSingle']);



//Posts
Route::get('about','PagesController@getAbout');
Route::get('contact', 'PagesController@getContact');

Route::get('/', 'PagesController@getIndex');

Route::resource('posts','PostController');




//Authentication Routes..

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );