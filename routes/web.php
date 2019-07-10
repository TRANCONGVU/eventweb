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


Route::get('trangchu', [
	'as' =>'trangchu',
	'uses' => 'Controller_1@get_trangchu'
]);
Route::get('about', [
	'as' =>'about',
	'uses' => 'Controller_1@get_about'
]);

Route::get('sukien', [
	'as' =>'sukien',
	'uses' => 'Controller_1@get_sukien'
]);

Route::get('thietbi', [
	'as' =>'thietbi',
	'uses' => 'Controller_1@get_thietbi'
]);

Route::get('nhansu', [
	'as' =>'nhansu',
	'uses' => 'Controller_1@get_nhansu'
]);

Route::get('lienhe', [
	'as' =>'lienhe',
	'uses' => 'Controller_1@get_lienhe'
]);

Route::get('team', [
	'as' =>'team',
	'uses' => 'Controller_1@get_team'
]);
Route::get('tintuc', [
	'as' =>'tintuc',
	'uses' => 'Controller_1@get_tintuc'
]);


