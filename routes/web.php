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


// HOME PAGE ROUTES
Route::group([''], function () {
    Route::get('/',             'IndexController@index')->name('main');
    Route::get('/home',         'HomeController@index') ->name('home');
    Route::resource('mains',    'MainViewController');
    Route::resource('fields',   'Fields_Of_WorkController');
    Route::resource('projects', 'ProjectImageSliderController');
    Route::resource('whyus',    'WhyUsController');
    Route::resource('sponsers', 'SponserController');
    Route::resource('reviews',  'ReviewController');
    });


// ABOUT PAGE ROUTES
Route::group([''], function () {
    Route::resource('about',           'About_page\MainController');
    
    // HEADER routes
    Route::post('about/header',        'About_page\MainController@header_store')   ->name('header_store');
    Route::put('about/header/{id}',    'About_page\MainController@header_update')  ->name('header_update');
    
    // ABOUT_US routes
    Route::post('about/us',            'About_page\MainController@about_us_store') ->name('about_us_store');
    
    // SERVICE routes
    Route::post('about/services',      'About_page\MainController@service_store')  ->name('service_store');
    Route::post('about/update/{id}',   'About_page\MainController@service_update') ->name('service_update');
    Route::delete('about/service/{id}','About_page\MainController@service_delete') ->name('service_delete');
    
    // CLIENTS routes
    Route::post('about/clints',        'About_page\MainController@client_store')   ->name('client_store');
    Route::post('about/clint_bg',        'About_page\MainController@client_bg_store')   ->name('client_bg_store');
    Route::post('about/clints/{id}',   'About_page\MainController@client_update')  ->name('client_update');
    Route::delete('about/clint/{id}','About_page\MainController@client_delete')  ->name('client_delete');
    Route::post('about/team',        'About_page\MainController@team_store')   ->name('team_store');
    Route::post('about/team/{id}',   'About_page\MainController@team_update')  ->name('team_update');
    Route::delete('about/teams/{id}','About_page\MainController@team_delete')  ->name('team_delete');
    });


Auth::routes();