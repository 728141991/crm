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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home','HomeController@index');
Route::get('/organization/search','OrganizationController@search');
Route::resource('/organization','OrganizationController');
Route::get('/contact/search','ContactController@search');
Route::get('/contact/{id}/add_product/list','ContactController@list_product');
Route::get('/contact/{id}/add_product/edit','ContactController@edit_product');
Route::post('/contact/add_product/save','ContactController@save_product');
Route::resource('/contact','ContactController');
Route::resource('/lead','LeadController');
Route::resource('/document','DocumentController');
Route::resource('/product','ProductController');
Route::resource('/activity','ActivityController');

Route::auth();

Route::get('/home', 'HomeController@index');

