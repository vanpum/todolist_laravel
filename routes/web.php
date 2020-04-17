<?php

use App\Http\Controllers\TodolistController;
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

Route::get('/todolist', function () {
    return view('todolist');
});

Route::prefix('/api')->group(function () {
    Route::get('/todolist', 'TodolistController@index');
    
    Route::get('/todolist/{id}', 'TodolistController@show');
    
    Route::post('/todolist', 'TodolistController@store');
    
    Route::put('/todolist/{id}', 'TodolistController@update');
    
    Route::delete('/todolist/{id}', 'TodolistController@remove');
});