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
Route::group([''], function () 
    {

        Route::resource('about',           'AboutController');
        
        // HEADER routes
        Route::post('about/header',        'AboutController@header_store')  ->name('header_store');
        Route::put('about/header/{id}',    'AboutController@header_update') ->name('header_update');
        
        // ABOUT_US routes
        Route::post('about/us',            'AboutController@about_us_store')->name('about_us_store');
        
        // SERVICE routes
        Route::post('about/services',      'AboutController@service_store') ->name('service_store');
        Route::post('about/update/{id}',   'AboutController@service_update')->name('service_update');
        Route::delete('about/service/{id}','AboutController@service_delete')->name('service_delete');
        
        // CLIENTS routes
        Route::post('about/clints',      'AboutController@client_store')   ->name('client_store');
        Route::post('about/clint_bg',    'AboutController@client_bg_store')->name('client_bg_store');
        Route::post('about/clints/{id}', 'AboutController@client_update')  ->name('client_update');
        Route::delete('about/clint/{id}','AboutController@client_delete')  ->name('client_delete');
        Route::post('about/team',        'AboutController@team_store')     ->name('team_store');
        Route::post('about/team/{id}',   'AboutController@team_update')    ->name('team_update');
        Route::delete('about/teams/{id}','AboutController@team_delete')    ->name('team_delete');

    });


    Route::group([''], function () {
        Route::resource('all_projects' , 'ProjectController');
        Route::post('all_projects/head' , 'ProjectController@header_store')->name('header_store');
    });


Auth::routes();