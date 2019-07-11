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



Route::get('/index', 'attendanceController@index');

Route::get('/studentlist', 'attendanceController@studentlist');
Route::post('/studentlist', 'attendanceController@studentlist');

Route::get('/studrecords', 'attendanceController@studrecords');

Route::get('/dashboard', 'attendanceController@dashboard');
Route::post('/dashboard','attendanceController@insertstudent');

Route::delete('/studentlist/{id}','attendanceController@deletestudent');
Route::get('/studentlist/{id}','attendanceController@deletestudent');