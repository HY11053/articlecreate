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
Route::get('articles', 'AdminController\ArticlesController@GetArticles');
Route::get('article/{id}.shtml', 'AdminController\ArticlesController@GetArticleOne');
Route::get('keywords', 'AdminController\KeywordsController@GetKeywords');
Route::get('delete/keywords/{id}', 'AdminController\KeywordsController@DeleteKeywords');
Route::get('/keywords/search', 'AdminController\KeywordsController@SearchKeywords');
Route::post('update/keywords/{id}', 'AdminController\KeywordsController@UpdateKeywords');
