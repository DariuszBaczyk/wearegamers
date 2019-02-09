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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/search', 'SearchController@users');

Route::resource('/users', 'UsersController');

Route::resource('/groups', 'GroupsController');

Route::resource('/events', 'EventsController');

//Route::get('/user-avatar/{id}/{size}', 'ImagesController@user_avatar');

Route::get('users/{user}/friends', 'FriendsController@index');
Route::post('/friends/{friend}', 'FriendsController@add');
Route::patch('/friends/{friend}', 'FriendsController@accept');
Route::delete('/friends/{friend}', 'FriendsController@destroy');

Route::resource('/posts', 'PostsController');

Route::resource('/comments', 'CommentsController');

Route::post('/likes', 'LikesController@add');
Route::delete('/likes', 'LikesController@destroy');

Route::get('/notifications', 'NotificationsController@index');
Route::patch('/notifications/{notification}', 'NotificationsController@update');

//logowanie prze konto google
Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');

//zmiana hasła
Route::get('/changePassword','HomeController@showChangePasswordForm');
Route::post('/changePassword','HomeController@changePassword')->name('changePassword');
