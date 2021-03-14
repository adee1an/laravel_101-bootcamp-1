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

Route::name('comment.')->group(function () {
    Route::get('/comment', 'CommentController@index')->name('index');
    Route::post('/comment', 'CommentController@store')->name('store');
    Route::get('/comment/create', 'CommentController@create')->name('create');
    Route::get('/comment/{comment}/edit', 'CommentController@edit')->name('edit');
    Route::put('/comment/{comment}/edit', 'CommentController@update')->name('update');
    Route::delete('/comment/{comment}/destroy', 'CommentController@destroy')->name('destroy');
});
