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
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('release0');
});

Route::get('/data-tables',function(){
    return view('release1');
});

Route::get('/posts/create', 'PostController@create');
Route::post('/posts','PostController@store');
Route::get('/posts', 'PostController@index');
Route::get('/posts/{id}','PostController@show');
Route::get('/posts/{id}/edit','PostController@edit');
Route::put('/posts/{id}','PostController@update');
Route::delete('/posts/{id}','PostController@destroy');
