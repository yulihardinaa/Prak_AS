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
    return view('index');
});

Route::get('/category','CategoriesController@index');
Route::post('/category/store','CategoriesController@store');
Route::post('/category/{id}/update','CategoriesController@update');
Route::get('/category/{id}/delete','CategoriesController@delete');


Route::get('/article','ArticlesController@index');
Route::get('/article/create','ArticlesController@create');
Route::get('/article/{id}/show','ArticlesController@show');
Route::post('/article/store','ArticlesController@store');
Route::get('/article/{id}/edit','ArticlesController@edit');
Route::post('/article/{id}/update','ArticlesController@update');
Route::get('/article/{id}/delete','ArticlesController@delete');
