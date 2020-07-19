<?php

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

Route::get('/tests', 'TestsController@index' );

Route::get('/suivi', 'LearningFollowUpController@index' );


Route::get('/kanboard/example/', 'KanboardController@example' );

Route::get('/kanboard', 'KanboardController@index' );
Route::get('/kanboard/show/{board}', 'KanboardController@show' );
Route::get('/kanboard/create', 'KanboardController@create' );
Route::get('/kanboard/edit/{board}', 'KanboardController@index' );
Route::get('/kanboard/update/{board}', 'KanboardController@update' );
Route::post('/kanboard/update/{board}', 'KanboardController@store' );
Route::get('/kanboard/delete/{board}', 'KanboardController@index' );
Route::post('/kanboard/store', 'KanboardController@store' );




Route::get('/blog', 'PostController@index' );
Route::get('/post/{post}', 'PostController@show' );
Route::get('/post/add', 'PostController@create' );
Route::get('/post/update/{post}', 'PostController@update' );
Route::get('/post/delete/{post}', 'PostController@delete' );
Route::post('/post/store/{post}', 'PostController@store' );

Route::get('/', function () {
    return view('welcome');
});
