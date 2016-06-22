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
    return view('home');
});


Route::auth();
Route::resource("industries","IndustryController");
Route::resource("follow","FollowController");
Route::post("/foll","FollowController@add");



Route::get('/industries', ['middleware' => ['auth','admin'], 'as' => 'industries.index', 'uses' => 'IndustryController@index']);
Route::get('/industries/create', ['middleware' => ['auth','admin'], 'as' => 'industries.create', 'uses' => 'IndustryController@create']);
Route::get('/industries/{industries}/edit', ['middleware' => ['auth','admin'], 'as' => 'industries.show', 'uses' => 'IndustryController@show']);
Route::get('/industries/{industries}', ['middleware' => ['auth','admin'], 'as' => 'industries.edit', 'uses' => 'IndustryController@edit']);
Route::get('/show', ['middleware' => ['auth','admin'], 'as' => 'job.show', 'uses' => 'JobController@show']);


Route::get('/home', 'HomeController@index');


// verification token resend form
Route::get('verify/resend', [
    'uses' => 'Auth\VerifyController@showResendForm',
    'as' => 'verification.resend',
]);

// verification token resend action
Route::post('verify/resend', [
    'uses' => 'Auth\VerifyController@sendVerificationLinkEmail',
    'as' => 'verification.resend.post',
]);

// verification message / user verification
Route::get('verify/{token?}', [
    'uses' => 'Auth\VerifyController@verify',
    'as' => 'verification.verify',
]);

Route::group(['prefix' => 'cv'],function(){

    Route::get('/', 'CvController@index');

    Route::get('/new',function(){
        return view('cv.newcv');
    });
    
    Route::post('/new','CvController@newCv');

    Route::group(['prefix' => '{id}'],function(){
        Route::get('/','CvController@userCV');

        Route::get('/personal/', 'CvController@personalInfo');
        Route::post('/personal/', 'CvController@AddPersonalInfo');

        Route::get('/summary','CvController@summaryInfo');
        Route::post('/summary','CvController@AddSummaryInfo');

        Route::get('/work','CvController@workInfo');
        Route::post('/work','CvController@AddWorkInfo');

        Route::get('/education', 'CvController@educationInfo');
        Route::post('/education', 'CvController@AddEducationInfo');

        Route::get('/skills', 'CvController@skillsInfo');
        Route::post('/skills', 'CvController@AddSkillsInfo');

        Route::get('/text', 'CvController@textInfo');
        Route::post('/text', 'CvController@AddTextInfo');

    });


});


Route::resource("company","CompanyController");
Route::get('/singin', 'CompanyController@singin');
Route::post('/singin', 'CompanyController@login');

Route::get('/job', 'JobController@create');
Route::post('/job', 'JobController@store');
// Route::get('/job/showjob', 'JobController@showjob');

Route::resource("job","JobController");



// Route::post('/tag', 'TagController@check');
// Route::post('/tag',function(){
// 	return "hello";
// });
// show job
Route::get('/show', 'JobController@show');
// search job
Route::post('/search', 'JobController@search');

// Accepted job
Route::post('/acceptJobs','JobController@acceptJobs');
// Route::post('/acceptJobs',function(){
// 	return "hello";
// });
Route::post('/notAcceptJobs','JobController@notAcceptJobs');


Route::get('/notification', function () {
    return view('notification');
});

Route::resource('items', 'ItemController',
    ['except' => ['create', 'edit']]);


