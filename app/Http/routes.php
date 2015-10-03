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

Route::get('/','PagesController@index');
Route::get('index','PagesController@index');
Route::get('login','LoginController@index');
Route:get('logout','LoginController@logout');
Route::post('login','LoginController@signin');
Route::get('files','DocumentsController@files');
Route::post('files','DocumentsController@storeDocument');
Route::get('files/{id}','DocumentsController@delete_file');
Route::get('personel','PersonnelController@personel');
Route::get('add_new','PagesController@add_user');
Route::post('add_new','PagesController@register');
