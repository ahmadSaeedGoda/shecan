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

Route::group(['prefix' => 'api/v1'], function(){
    Route::resource('cvs', 'CvController');
    Route::get('cvs/user/{cvs}','CvController@getByUser');
    Route::post('cvs/profile/{id}','CvController@storeProfile');
    Route::post('cvs/summary/{id}','CvController@storeSummary');
    Route::post('cvs/work/{id}','CvController@storeWork');
    Route::post('cvs/education/{id}','CvController@storeEducation');
    Route::post('cvs/skills/{id}','CvController@storeSkills');
    Route::post('cvs/text/{id}','CvController@storeText');
    
});

