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
Route::get('admin/profile', ['middleware' => 'admin', function () {  
    return 'admin';
}]);

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




