<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// sitemaps
//Route::get('sitemap', 'SitemapsController@index')->name('sitemap.index');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/gioi-thieu', 'HomeController@introduction')->name('introduction');

Route::get('/parse', 'SoapParserController@parse');
Route::get('/parseDOM', 'ReceiveResultController@parseDOM');
Route::get('/recheck', 'ReceiveResultController@reCheck');
