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

Route::get('/', 'BlogController@index');


### For Admin ###
Route::any('admin', 'AuthController@login');

Route::any('admin/logout', 'AuthController@logout');

Route::get('admin/dashboard', 'BlogAdminController@index');

Route::any('admin/create', 'BlogAdminController@create');

Route::any('admin/edit/{id}', 'BlogAdminController@edit');

Route::get('admin/delete/{id}', 'BlogAdminController@delete');

Route::when('admin/*', 'auth');
