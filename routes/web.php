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

//web worker data general routes
Route::any('/wwdata/generate', 'wwdata@generate');

//web worker form general routes
Route::any('/wwform/generate', 'wwform@generate');
Route::post('/wwform/post', 'wwform@post');

// default routes
Route::any('/', 'backend@index');


Route::any('/{param_1}', 'backend@index');
Route::any('/{param_1}/{param_2}', 'backend@index');