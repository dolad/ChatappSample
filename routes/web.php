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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contacts', 'ContactsController@get');
Route::get('/conversation/{id}', 'ContactsController@getMessagesFor');
Route::post('/conversation/send', 'ContactsController@send');


Route::get('/checkout', [
    'uses'=>'DashboardController@displaycheckout',
    'as'=>'checkout'
]);
Route::post('/charge', [
    'uses'=>'DashboardController@charge',
    'as'=>'charge'
]);
Route::post('/edituser', [
    'uses'=>'DashboardController@update',
    'as'=>'edituser'
]);

Route::get('/premium', [
    'uses'=>'DashboardController@premiumuser',
    'as'=>'premium'
]);





Route::get('/intro', 'DashboardController@display')->name('intro');

Route::get('/intrologin', 'DashboardController@displaylogin')->name('intrologon');
