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
    return view('user.search');
});



//Search
Route::get('/search','SearchController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//profile
Route::post('follows/{profileId}', 'ProfileController@followUser')->name('user.follow');
Route::delete('follows/{profileId}', 'ProfileController@unFollowUser')->name('user.unfollow');
Route::get( '/profile/{id}/edit', 'ProfileController@edit');


// users
Route::get('/profile/{id}', 'UserController@index'); //ver perfil



//posts
Route::get('/post', 'PostsController@index'); // listar todos los posts
Route::get('/post/new', 'PostsController@create'); // mostrar formulario de alta
Route::post('/post', 'PostsController@store'); // guardar los datos del form
Route::get('/post/{id}/edit', 'PostsController@edit'); // mostrar formulario de edicion
Route::patch('/post/{id}', 'PostsController@update'); // guardar los datos editados
Route::get('/post/{id}', 'PostsController@show'); // ver 1 solo post
Route::delete('/post', 'PostsController@destroy'); // borrar 1 solo post

// campaings
Route::get('/campaigns', 'CampaignController@index'); // listar todos los campaigns
Route::get('/campaigns/new', 'CampaignController@create'); // mostrar formulario de alta
Route::post('/campaings', 'CampaignController@store'); // guardar los datos del form
Route::get('/campaigns/{id}/edit', 'CampaignController@edit'); // mostrar formulario de edicion
Route::patch('/campaigns/{id}', 'CampaignController@update'); // guardar los datos editados
Route::get('/campaigns/{id}', 'CampaignController@show'); // ver 1 solo post
Route::delete('/campaigns/{id}', 'CampaignController@destroy'); // borrar 1 solo post
