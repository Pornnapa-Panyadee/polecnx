<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;


Route::get('/', function () { return view('guest.index');});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




// Route::get('/', function () { return view('guest.index');})->name('form');
// Route::get('/', 'App\Http\Controllers\PolelocationController@getDataHomeTable');
Route::get('map/getDataSurvey/{compass}', 'App\Http\Controllers\PolelocationController@getDataSurvey')->name('map.getDataSurvey');
Route::get('/pole', 'App\Http\Controllers\PolelocationController@getDataHomeTable');
Route::get('/floodmap', function () { return view('guest.floodmap');});

// Flood Mark CM 2024

// Route::get('/flood24', function () { return view('floodmark24.underconstruction');})->name('home.flood24');
Route::prefix('/flood24')->group(function () {
    Route::get('/test', 'App\Http\Controllers\floodmark24Controller@getTabletest');
    Route::get('/table/data', 'App\Http\Controllers\floodmark24Controller@getDataTable')->name('floodmark24.table.data');
    // Route::get('/', function () { return view('floodmark24.underconstruction');})->name('home.flood24');
    Route::get('/', 'App\Http\Controllers\floodmark24Controller@getTable')->name('home.flood24');
    Route::get('/getDataSurveyLevel/{level}', 'App\Http\Controllers\floodmark24Controller@getDataSurveyLevel')->name('flood24.getDataSurveyLevel');
    Route::get('/report/{code}', 'App\Http\Controllers\floodmark24Controller@getImage');
     Route::get('/image/{code}', 'App\Http\Controllers\floodmark24Controller@getImagereport');
    Route::get('/successupload', function () { return view('form.result');});

});

// Route::get('/flood24', 'App\Http\Controllers\floodmark24Controller@getTable')->name('home.flood24');
// Route::get('flood24/getDataSurveyLevel/{level}', 'App\Http\Controllers\floodmark24Controller@getDataSurveyLevel')->name('flood24.getDataSurveyLevel');
// Route::get('/flood24/report/{code}', 'App\Http\Controllers\floodmark24Controller@getImage');
// Route::get('/flood24/image/{code}', 'App\Http\Controllers\floodmark24Controller@getImagereport');
// Route::get('/flood24/successupload', function () { return view('form.result');});



// Route::get('/flood24/table', 'App\Http\Controllers\FormaddfloodmarkController@getTable');

Route::get('flood24/getDataSurvey', 'App\Http\Controllers\FormaddfloodmarkController@getDataSurvey')->name('flood24.getDataSurvey');
Route::get('photoremove/{id}', 'App\Http\Controllers\FormaddfloodmarkController@destroyImage')->name('photoremove');



Route::get('/genpng', function () { return view('genImage.genPNG');});


// Auth Flood Mark 2024
Route::get('/flood24/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/flood24/register', [RegisterController::class, 'register']);


Route::prefix('/flood24/admin')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    
    Route::get('/', 'App\Http\Controllers\AdminController@adminHome')->name('admin.home')->middleware('is_admin');
    Route::get('/home', 'App\Http\Controllers\floodmark24Controller@getTable')->name('home.flood24');
    Route::get('/table', 'App\Http\Controllers\FormaddfloodmarkController@getTable')->name('admin.table');
    Route::get('/form', function () { return view('form.add');});
    Route::get('/images/{code}', 'App\Http\Controllers\FormaddfloodmarkController@getImage');
    Route::get('/edit/{code}', 'App\Http\Controllers\FormaddfloodmarkController@editDataSurvey');
    Route::get('/removefloodmark/{id}', 'App\Http\Controllers\FormaddfloodmarkController@remove')->name('floodmark.remove');
    Route::post('/updatefloodmark', 'App\Http\Controllers\FormaddfloodmarkController@update')->name('floodmark.update');
    Route::post('/addfloodmark', 'App\Http\Controllers\FormaddfloodmarkController@addFloodmark')->name('floodmark.add');

});

// Redirect unauthenticated users to /flood24
Route::get('/flood24/admin', function () {
    return redirect('/flood24');
})->middleware('guest');


//update class

Route::get('/class', 'App\Http\Controllers\floodmark24Controller@updateFloodmarkClass');



Route::get('/getDataSurveyLevelVer1/{level}', 'App\Http\Controllers\floodmark24Controller@getDataSurveyLevelVer1')->name('flood24.getDataSurveyLevelVer1');
Route::get('/table/dataVer1', 'App\Http\Controllers\floodmark24Controller@getDataTableVer1')->name('floodmark24.table.dataVer1');

