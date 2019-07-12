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


Route::get('/trangchu', function() {
	return view('pages.trangchu');
});
Route::get('/', function() {
	return view('pages.trangchu');
});

Route::get('/about', function() {
	return view('pages.about');
});
Route::get('/sukien', function() {
	return view('pages.sukien');
});
Route::get('/thietbi', function() {
	return view('pages.thietbi');
});
Route::get('/nhansu', function() {
	return view('pages.nhansu');
});
Route::get('/tintuc', function() {
	return view('pages.tintuc');
});
Route::get('/lienhe', function() {
	return view('pages.lienhe');
});
Route::get('/team', function() {
	return view('pages.team');
});

Route::get('/detai', function() {
	return view('pages.detai');
});

