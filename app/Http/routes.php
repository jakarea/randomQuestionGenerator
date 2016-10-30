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

Route::post('/user/create','userController@store');

Route::get('/', function () {
     if (Auth::check()) {
        return redirect('dashboard');
    }
    return view('welcome');;
});
Route::get('signin', function () {
    if (Auth::check()) {
        return redirect('dashboard');
    }
    return view('auth.login');
});
Route::get('/signup', function () {
     if (Auth::check()) {
        return redirect('dashboard');
    }
    return view('auth.registrationform');
});

Route::controllers(['auth' => 'Auth\AuthController','password' => 'Auth\PasswordController']);
Route::get('auth/login', function(){return redirect('signin');});
Route::get('login', function(){return redirect('signin');});
Route::post('signin', ['as' => 'signin','uses'=>'Auth\AuthController@postLogin']);

Route::post('user/create','userController@store');


Route::group(['middleware' => 'auth'], function () {
    Route::get('signout', function(){Auth::logout();return redirect('/');});
    Route::get('dashboard','dashboardController@index');
    Route::get('user','userController@allUser');
    Route::get('user/add','userController@addUser');
    Route::get('user/edit/{id}','userController@editUser');
    Route::get('user/delete/{id}','userController@deleteUser');
    Route::post('user/save','userController@store');
    Route::post('user/update','userController@updateUser');
    Route::get('profile','userController@profile');

    //Resources Controller
    Route::resource('course', 'courseController');
    Route::resource('question', 'questionController');

    Route::get('pdf','questionGeneratorController@index');
    Route::get('pdf/show/{id}','questionGeneratorController@download');
    Route::get('pdf/generate','questionGeneratorController@create');
    Route::post('pdf/preview','questionGeneratorController@preview');
    Route::get('pdf/delete/{id}','questionGeneratorController@delete');
    Route::get('pdfdownload',array('as'=>'pdfdownload','uses'=>'questionGeneratorController@download'));
    //ajax request
    Route::get('api/course/{name}','apiController@courseTitle');
    Route::get('api/code/{code}','apiController@courseCode');
});



