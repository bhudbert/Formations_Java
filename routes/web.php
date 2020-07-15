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

Route::get('/kanban-board', 'KanBanBoardController@index' );





Route::get('/', function () {
    return view('welcome');
});
