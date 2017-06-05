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

// view
Route::get('/', 'HomeController@index')->name('home');
//Route::get('/gioi-thieu', 'HomeController@introduction')->name('introduction');
Route::post('/dang-ky-nhan-email', 'SubscribeResultController@store')->name('subscribe.post'); // form dang ky

// logic

Route::get('/parseDOM', 'ReceiveResultController@parseDOM');
Route::get('/recheck', 'ReceiveResultController@reCheck');
Route::get('/checkSubcribe', 'ReceiveResultController@checkSubcribe');

Route::get('/download', 'ReceiveResultController@download')->name('download');
Route::get('courses/result', 'ResultCoursesController@resultCourses')->name('course.result');
