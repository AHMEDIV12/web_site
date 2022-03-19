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


Route::get('/home', 'HomeController@index')->name('home');
Route::resource('mains', 'MainViewController');
Route::resource('fields', 'Fields_Of_WorkController');
Route::resource('projects', 'ProjectImageSliderController');
Route::resource('whyus', 'WhyUsController');
Route::resource('sponsers', 'SponserController');
Route::resource('reviews', 'ReviewController');

Route::get('/', 'IndexController@index')->name('main');


Auth::routes();