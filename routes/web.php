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
Route::get('/admin/publicaciones/{slug}', 'Admin\PostController@edit')->name('admin.posts.edit');
Route::put('/admin/publicaciones/{slug}', 'Admin\PostController@update')->name('admin.posts.update');
Route::delete('/admin/publicaciones/eliminar/{slug}', 'Admin\PostController@delete')->name('admin.posts.delete');

// Admin Posts Categories
Route::get('/admin/categorias', 'Admin\PostCategoryController@index')->name('admin.categories');
Route::get('/admin/categorias/nueva', 'Admin\PostCategoryController@create')->name('admin.categories.create');
Route::post('/admin/categorias/nueva', 'Admin\PostCategoryController@save')->name('admin.categories.save');
Route::get('/admin/categorias/{slug}', 'Admin\PostCategoryController@edit')->name('admin.categories.edit');
Route::put('/admin/categorias/{slug}', 'Admin\PostCategoryController@update')->name('admin.categories.update');
Route::delete('/admin/categorias/eliminar/{slug}', 'Admin\PostCategoryController@delete')->name('admin.categories.delete');

// Admin Posts Categories
Route::get('/admin/banners', 'Admin\BannerController@index')->name('admin.banners');
Route::post('/admin/banners/{id}', 'Admin\BannerController@update')->name('admin.banners.update');