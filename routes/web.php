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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function() {
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/', 'AdminController@index')->name('admin.dashboard');
});

Route::prefix('coach')->group(function() {
  Route::get('/login', 'Auth\CoachLoginController@showLoginForm')->name('coach.login');
  Route::post('/login', 'Auth\CoachLoginController@login')->name('coach.login.submit');
  Route::get('/', 'CoachController@index')->name('coach.dashboard');
});

Route::prefix('swimmer')->group(function() {
  Route::get('/login', 'Auth\SwimmerLoginController@showLoginForm')->name('swimmer.login');
  Route::post('/login', 'Auth\SwimmerLoginController@login')->name('swimmer.login.submit');
  Route::get('/', 'SwimmerController@index')->name('swimmer.dashboard');
});
