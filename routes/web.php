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

use \Illuminate\Database\Console\Migrations\RollbackCommand;

Route::get('/', 'ArticleController@index');
Route::get('/article/create', 'ArticleController@create');
Route::post('/article', 'ArticleController@store')->name('article.store');