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

Route::get('/', 'SiteController@home');

Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

Route::group(['middleware' => 'auth'],function(){

Route::get('/dashboard','DashboardController@index');
Route::get('/pelajar','PelajarController@index');
Route::post('/pelajar/create','PelajarController@create');
Route::get('/pelajar/{id}/edit','PelajarController@edit');
Route::post('/pelajar/{id}/update','PelajarController@update');
Route::get('/pelajar/{id}/delete','PelajarController@delete');
Route::get('/pelajar/{id}/profile','PelajarController@profile');
Route::get('/halaman');

});