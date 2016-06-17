<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', 'HomeController@index');

Route::get('/gallery', 'HomeController@gallery');

Route::get('/vraveyseis', 'HomeController@vraveyseis');

Route::get('/seminaria', 'HomeController@seminaria');

Route::get('/epikoinwnia', 'HomeController@epikoinwnia');

Route::get('/mail/send', 'HomeController@sendmail');
