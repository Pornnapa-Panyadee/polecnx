<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () { return view('guest.index');});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('/', function () { return view('guest.index');})->name('form');
// Route::get('/', 'App\Http\Controllers\PolelocationController@getDataHomeTable');
Route::get('map/getDataSurvey/{compass}', 'App\Http\Controllers\PolelocationController@getDataSurvey')->name('map.getDataSurvey');
Route::get('/pole', 'App\Http\Controllers\PolelocationController@getDataHomeTable');
Route::get('/floodmap', function () { return view('guest.floodmap');});