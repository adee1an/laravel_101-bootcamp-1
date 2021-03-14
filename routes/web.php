<?php

use App\Post;
use Illuminate\Support\Facades\Route;

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

Route::get('/post', 'PostController@index')->name('index');
Route::post('/post', 'PostController@store')->name('store');
Route::get('/post/create', 'PostController@create')->name('create');
Route::get('/post/{post}/edit', 'PostController@edit')->name('edit');
Route::put('/post/{post}/edit', 'PostController@update')->name('update');
Route::delete('/post/{post}/destroy', 'PostController@destroy')->name('destroy');
