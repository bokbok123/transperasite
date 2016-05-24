<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');
Route::get('admin', 'HomeController@admin');
Route::post('login', 'HomeController@login');

Route::group(array('before' => 'auth.login'), function()
{
    Route::post('create_job', 'AdminController@create_job');
    Route::post('create_announcements', 'AdminController@create_announcements');
    Route::get('dashboard', 'AdminController@dashboard');
    Route::get('careers', 'AdminController@careers');
    Route::get('announcements', 'AdminController@announcements');
});