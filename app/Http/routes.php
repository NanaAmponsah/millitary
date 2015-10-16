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

Route::get('login','LoginController@index');
Route::post('login','LoginController@signin');
Route::post('clients/login','ClientsLoginController@signin');
Route::get('clients/login','ClientsLoginController@index');
Route::get('clients/logout','ClientsLoginController@logout');

Route::get('clients/index','ClientsController@index');


Route::group(array('middleware'=>'auth'), function() {

    Route::get('/', 'PagesController@index');
    Route::get('index', 'PagesController@index');
    Route::get('add_new', 'PagesController@add_user');
    Route::post('add_new', 'PagesController@register');

    Route::get('logout', 'LoginController@logout');

    Route::get('files', 'DocumentsController@files');
    Route::post('files', 'DocumentsController@storeDocument');
    Route::get('files/{id}', 'DocumentsController@delete_file');

    Route::get('personel', 'PersonnelController@personel');
    Route::get('add_personnel', 'PersonnelController@add_personnel');
    Route::post('add_personnel', 'PersonnelController@store_personnel');
    Route::get('personel/{id}', 'PersonnelController@delete_personnel');
    Route::put('edit_personnel/{id}', 'PersonnelController@update_personnel');
    Route::get('edit_personnel/{id}', 'PersonnelController@edit_personnel');

    Route::get('peacekeeping', 'PersonnelController@peacekeeping');
    Route::post('nominate', 'PersonnelController@update_nominated_for');
    Route::get('courses', 'PersonnelController@courses');
    Route::get('promotion', 'PersonnelController@promotion');
    Route::get('view_peacekeeping', 'PersonnelController@view_peacekeeping');
    Route::get('view_courses', 'PersonnelController@view_courses');
    Route::get('manage_promotions','PersonnelController@manage_promotions');


    Route::get('add_mission','MCountryController@index');
    Route::post('add_mission','MCountryController@store');

});
