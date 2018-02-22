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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('auth/{provider}', 'Auth\SocialAuthController@redirectToProvider')->name('social.auth');
Route::get('auth/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback');

Route::get('/', 'HomeController@index')->name('home');

Route::get('/nuestra-penya', 'HomeController@penya')->name('penya');

// Admin Routes
Route::get('/admin', 'Admin\AdminController@index')->name('admin');

// Admin Posts Routes
Route::get('/admin/publicaciones', 'Admin\PostController@index')->name('admin.posts');
Route::get('/admin/publicaciones/nueva', 'Admin\PostController@create')->name('admin.posts.create');
Route::post('/admin/publicaciones/nueva', 'Admin\PostController@save')->name('admin.posts.save');

