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


Route::namespace('Problems')->group(function () {
    Route::get('/', 'ProblemController@index');
    Route::resource('problems', 'ProblemController');
    Route::resource('/{problem}/answers', 'AnswerController');
});

// 管理者
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    //    // ログイン認証後
    //    // TOPページ
    //    Route::get('/', 'CompanyController@index')->name('home');
    //    //
    //    Route::get('/bot_for_owners', 'BotForOwnerController@index');
    //    Route::resource('images', 'ImageController')->only(['create', 'store']);
    //    Route::prefix('images')->name('images.')->group(function () {
    //        Route::get('/', 'ImageController@show')->name('show');
    //    });
    //    Route::resource('companies', 'CompanyController');
    //    Route::namespace('Companies')->prefix('companies')->name('companies.')->group(function () {
    //        Route::resource('/{company}/bots', 'BotController');
    //        Route::get('download/{bot}', 'BotLogCSVDownloadController@downloadCSV')->name('csv.download');
    //    });
});
