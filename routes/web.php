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
    return view('devPage');
});

// Route::get('/tsuinteru', function(){
//     return view('tsuinteru');
// });



// TTmail
Route::group(['prefix' => 'ttmail'], function () {
    Route::get('/', 'TtmailController@index');
    Route::get('/list', 'TtmailController@listMails');
    Route::get('/track/{ttmailId}', 'TtmailController@mailReaded');
    Route::post('/createTtmail', 'TtmailController@createTtmail');
});
