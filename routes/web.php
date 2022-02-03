<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('home');
// });
/////////////////////////////////////////////////////student ///////////////////////////////////////
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/students', 'HomeController@showStudents')->name('students.show');
Route::post('/school-register/{id}', 'HomeController@post')->name('school_regist');
///////////////////////////////////////admin school/////////////////////////////////////////////////
Route::resource('/schools','Dashboard\SchoolController')->except(['show','edit']);

Route::post('/schools/restore/{id}', 'Dashboard\SchoolController@restore')->name('schools.restore');
Route::post('/schools/deleteForever/{id}', 'Dashboard\SchoolController@deleteForever')->name('schools.deleteForever');
///////////////////////////////////admin orders/////////////////////////////////////////////////////
Route::post('/orders/accept/{id}', 'Dashboard\OrderController@accept')->name('orders.accept');
Route::post('/orders/refus/{id}', 'Dashboard\OrderController@refus')->name('orders.refus');
Route::post('/orders/suspend/{id}', 'Dashboard\OrderController@suspend')->name('orders.suspend');
Route::post('/orders/restore/{id}', 'Dashboard\OrderController@restore')->name('orders.restore');
Route::post('/orders/deleteForever/{id}', 'Dashboard\OrderController@deleteForever')->name('orders.deleteForever');
Route::resource('/orders','Dashboard\OrderController')->only(['index','destroy']);
////////////////////////////////////////////////////////////////////////////////////////////////////
Auth::routes();
//
// Route::get('/home', 'HomeController@index')->name('home');
// Route::group(['middleware'=>'auth'],function(){
//   Route::resource('/users', 'UserController',['only'=>['index','follow']]);
//   Route::get('/users/follow/{id}', 'UserController@follow')->name('users.follow');
//   Route::resource('/posts','PostController',['except' => ['show']]);
// });
