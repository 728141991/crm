<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');

    Route::get('/article', 'ArticleController@index');
    //这个是使用了restful接口
    Route::resource('campaign','CRM\CampaignController');

    Route::resource('organization','CRM\OrganizationController');

    Route::resource('contact','CRM\ContactController');

    Route::resource('product','CRM\
    ProductController');
});

Route::get('now', function () {
    return date("Y-m-d H:i:s");
});
