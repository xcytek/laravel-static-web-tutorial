<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
//home.blade.php
Route::get('/home', function(){
	return View::make('home');
});
//aboutus.blade.php
Route::get('/about', function(){
	return View::make('aboutus');
});
//services.blade.php
Route::get('/services', function(){
	return View::make('services');
});
//locateus.blade.php
Route::get('/locate', function(){
	return View::make('locateus');
});