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

Route::get('/', 'HomeController@getLast5post')->name('home');
Route::get('category/{name}', 'CategoryController@getPostByCategoryName')->name('categoryName');
Route::get('admin/post/new', 'NewPostController@createNewPost')->name('newPost');
Route::post('admin/post/new', 'NewPostController@saveNewPost')->name('saveNewPost');
Route::get('admin/post/edit/{id}', 'EditPostController@createNewPost')->name('EditPostControllerPost');
Route::post('admin/post/edit/{id}', 'EditPostController@saveNewPost')->name('UpdatePost');
