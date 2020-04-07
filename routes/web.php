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

Route::get('/',                     'VoteController@index');
Route::get('/songs/list',           'VoteController@listSongs');
Route::get('/vote/{songId}/{score}','VoteController@voteSong');
Route::get('/votes/list',           'VoteController@listVotes');
