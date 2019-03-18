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
/**
 * Show Task Dashboard
 */
Route::get('/', "TaskController@index");

/**
 * Add New Task
 */
Route::post('/task', "TaskController@Create");
/**
 * Save Task
 */
Route::put('/store', "TaskController@store");
/**
 * Update Task
 */
Route::get('/task/update/{taskId}', 'TaskController@update');

/**
 * Delete Task
 */
Route::delete('/task/{task}', "TaskController@delete");
