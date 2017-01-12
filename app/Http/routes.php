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
Route::get('/contact/{id}/campaign','ContactController@list_campaign');
Route::delete('/contact/{id}/delete_campaign/{id2}','ContactController@delete_campaign');
Route::post('/contact/{id}/add_campaign/{id2}','ContactController@save_campaign');

Route::get('/campaign/{id}/contact','CampaignController@list_contact');
Route::delete('/campaign/{id}/delete_contact/{id2}','CampaignController@delete_contact');
Route::post('/campaign/{id}/add_contact/{id2}','ContactController@add_contact');
//额外添加的代码
//Route::resource('/contact/{id}/product','ContactProductController');



Route::resource('/contact','ContactController');
Route::resource('/lead','LeadController');
Route::resource('/document','DocumentController');
Route::resource('/product','ProductController');
Route::resource('/activity','ActivityController');
Route::resource('/campaign','CampaignController');
Route::auth();

Route::get('/home', 'HomeController@index');

