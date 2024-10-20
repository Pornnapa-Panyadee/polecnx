<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () { return view('guest.index');});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('addfloodmark', 'App\Http\Controllers\FormaddfloodmarkController@addFloodmark')->name('floodmark.add');
Route::post('updatefloodmark', 'App\Http\Controllers\FormaddfloodmarkController@update')->name('floodmark.update');
Route::get('removefloodmark/{id}', 'App\Http\Controllers\FormaddfloodmarkController@remove')->name('floodmark.remove');

// Route::get('/', function () { return view('guest.index');})->name('form');
// Route::get('/', 'App\Http\Controllers\PolelocationController@getDataHomeTable');
Route::get('map/getDataSurvey/{compass}', 'App\Http\Controllers\PolelocationController@getDataSurvey')->name('map.getDataSurvey');
Route::get('/pole', 'App\Http\Controllers\PolelocationController@getDataHomeTable');
Route::get('/floodmap', function () { return view('guest.floodmap');});

Route::get('/flood24/form', function () { return view('form.add');});
Route::get('/flood24/successupload', function () { return view('form.result');});
Route::get('/flood24/edit/{code}', 'App\Http\Controllers\FormaddfloodmarkController@editDataSurvey');


Route::get('/flood24/table', 'App\Http\Controllers\FormaddfloodmarkController@getTable');
Route::get('/flood24/images/{code}', 'App\Http\Controllers\FormaddfloodmarkController@getImage');
Route::get('flood24/getDataSurvey', 'App\Http\Controllers\FormaddfloodmarkController@getDataSurvey')->name('flood24.getDataSurvey');
Route::get('photoremove/{id}', 'App\Http\Controllers\FormaddfloodmarkController@destroyImage')->name('photoremove');
