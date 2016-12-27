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
Route::get('sitemap', 'SitemapsController@index')->name('sitemap.index');
Auth::routes();

/*Begin override auth route names*/
// Authentication Routes...
$this->get('dang-nhap', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('dang-nhap', 'Auth\LoginController@login')->name('login.post');
$this->post('dang-xuat', 'Auth\LoginController@logout')->name('logout');


// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('forgotpw.show');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('forgotpw.send');
//$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('resetpw.show');
//$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('resetpw.send');
$this->get('password/change', 'Auth\ChangePasswordController@show')->name('changepw.show');
$this->post('password/change/{token}', 'Auth\ChangePasswordController@change')->name('changepw.change');
/*End override auth route names*/

Route::get('/', function () {
    return redirect('trang-chu');
});

Route::get('/trang-chu', 'HomeController@index')->name('index');
Route::get('/gioi-thieu', 'HomeController@introduction')->name('introduction');


Route::get('user/activation/{token}', 'Auth\ActivationController@activate')->name('user.activate');

Route::get('tai-khoan/trang-ca-nhan', 'AccountController@profile')->name('account.profile');
Route::get('tai-khoan/cai-dat', 'AccountController@settings')->name('account.settings');
Route::post('tai-khoan/cap-nhat', 'AccountController@update')->name('account.update');
Route::post('tai-khoan/taikhoan/linh-vuc-huong-nghien-cuu', 'AccountController@updateInterestField')->name('account.update.teacher')->middleware('role:teacher');


/********************* admin *******************/
Route::get('quan-tri/tong-quan', 'AdminController@dashboard')->name('admin.dashboard')->middleware('role:admin');


Route::get('/home', 'HomeController@home')->name('home');


Route::get('/parse', 'SoapParserController@parse');
Route::get('/parseDOM', 'ReceiveResultController@parseDOM');
Route::get('/recheck', 'ReceiveResultController@reCheck');
