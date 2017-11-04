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

Route::get('/mytasks', 'TaskController@index');

Route::get('/mytasks1', function() {
	$tasks = [
		'Install and Run Laravel Framework',
		'Git',
		'Laravel',
		'Vue.js',
		'Send your work'
	];
    return view('tasks', compact('tasks'));
});
