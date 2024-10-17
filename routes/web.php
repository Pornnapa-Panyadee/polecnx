<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () { return view('guest.index');});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('addfloodmark', 'App\Http\Controllers\FormaddfloodmarkController@addFloodmark')->name('floodmark.add');

// Route::get('/', function () { return view('guest.index');})->name('form');
// Route::get('/', 'App\Http\Controllers\PolelocationController@getDataHomeTable');
Route::get('map/getDataSurvey/{compass}', 'App\Http\Controllers\PolelocationController@getDataSurvey')->name('map.getDataSurvey');
Route::get('/pole', 'App\Http\Controllers\PolelocationController@getDataHomeTable');
Route::get('/floodmap', function () { return view('guest.floodmap');});

Route::get('/flood24/form', function () { return view('form.add');});
Route::get('/flood24/successupload', function () { return view('form.result');});
Route::get('/flood24/table', 'App\Http\Controllers\FormaddfloodmarkController@getTable');
Route::get('/flood24/images/{code}', 'App\Http\Controllers\FormaddfloodmarkController@getImage');