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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('/admin')->namespace('Admin')->group(function(){
    // All The Admin Routes will BE DEFINED HERE
    Route::match(['get','post'], '/','AdminController@login');
    Route::group(['middleware'=>['admin']], function(){
        Route::get('dashboard','AdminController@dashboard');
        Route::get('settings','AdminController@settings');
        Route::post('check-current-pwd','AdminController@chkCurrentPassword');
        Route::post('update-current-pwd', 'AdminController@updateCurrentPassword');
        Route::match(['get','post'], 'update-admin-details','AdminController@updateAdminDetails');
        Route::get('logout','AdminController@logout');
        // SECTIONS
        Route::get('sections','SectionController@section');
        Route::post('update-section-status', 'SectionController@updateSectionStatus');
    });
    
});