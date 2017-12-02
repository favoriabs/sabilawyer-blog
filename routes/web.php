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

Route::get('/', 'HomeController@index')->name('index_page');
Route::get('/about', 'HomeController@aboutPage')->name('about_page');
Route::get('/contact', 'HomeController@contactPage')->name('contact_page');
Route::get('/admin', 'AuthController@login')->name('get_login_view');
Route::post('/login', 'AuthController@handleLogin')->name('handle_login');

Route::get('/logout', 'AuthController@logout')->name('logout');

//
Route::get('post/new', 'PostController@create')->name('create_post');
Route::post('post/save', 'PostController@store')->name('save_post');
Route::get('post/edit/{id}', 'PostController@edit')->name('edit_post');
Route::post('post/edit/{id}', 'PostController@update')->name('update_post');
Route::get('post/delete/{id}', 'PostController@delete')->name('delete_post');
Route::get('/{slug}', 'HomeController@viewPost')->name('view_post');

Route::get('category/manage', 'CategoryController@index')->name('manage_categories');
Route::post('category/new', 'CategoryController@create')->name('add_category');
Route::get('category/edit/{id}', 'CategoryController@edit')->name('edit_category');
Route::post('category/update/{id}', 'CategoryController@update')->name('update_category');
Route::get('category/delete/{id}', 'CategoryController@delete')->name('delete_category');
Route::get('category/posts/{id}', 'HomeController@viewPostsInCategory')->name('view_posts_in_category');

Route::post('/send/mail', 'MailController@sendMail')->name('send_mail');
