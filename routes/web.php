<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('page.home');
});
//Route::get('/page', function () {
//    return view('page');
//});


Route::group(['prefix' => 'dropdown'], function () {
    Route::get('/dpage1', function () {
        return view('page.dropdown1');
    })->name('dpage1');

    Route::get('/dpage2', function () {
        return view('page.dropdown2');
    })->name('dpage2');

    Route::get('/dpage3', function () {
        return view('page.dropdown3');
    })->name('dpage3');
});

Route::get('/tpage2', function(){
    return view('page.tpage2');
})->name('tpage2');
Route::get('/tpage3', function () {
    return view('page.tpage3');
})->name('tpage3');

/*
//login dashboard
Route::get('/login',function(){
    return view('page.login');
});
Route::get('login','AuthController@index');
Route::post('post-login', 'AuthController@postlogin');
Route::get('registration','AuthController@registration');
Route::post('post-registration','AuthController@postRegistration');
Route::get('dashboard','AuthController@dashboard');
Route::get('logout','AuthController@logout');
*/
//login route
Route::get('login', 'AuthController@index')->name('login');
Route::post('login', 'AuthController@postLogin'); 

//registration routes
Route::get('registration', 'AuthController@registration');
Route::post('registration', 'AuthController@postRegistration'); 

Route::middleware('auth')->group(function(){
//dashboard and logout route
Route::get('dashboard', 'AuthController@dashboard'); 
Route::get('logout', 'AuthController@logout');
});