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

Route::get('/', function () {
    return view('admin.login');
});

Route::fallback(function () {

    return view("404");

});

Route::get('/form', function () {
    //return view('welcome');
	return view('admin.userform');
});


Route::post('action/login', 'App\Http\Controllers\superadminController@logincheck');
Route::get('admin/dashboard', 'App\Http\Controllers\dashboardController@dashboard')->name("admin/dashboard");

Route::post('/booking-list', 'App\Http\Controllers\bookingController@bookinglist')->name("booking-list");

//check new user email address check  exist or not
Route::post("action/checkuseremail",'App\Http\Controllers\UserController@checkuseremail');

Route::post("action/checkuserphone",'App\Http\Controllers\UserController@checkuserphone');
//user 
Route::get('/admin/newuser', 'App\Http\Controllers\UserController@newuser');
Route::get('/admin/User-list', 'App\Http\Controllers\UserController@userlist');
Route::post('/action/newuser','App\Http\Controllers\UserController@saveuser');
Route::post('/action/edituser','App\Http\Controllers\UserController@edituser');
Route::get("action/edit-user/{any}",'App\Http\Controllers\UserController@getUserEditData');
Route::post('/action/deleteuser','App\Http\Controllers\UserController@deleteuser');
Route::post('/action/deleteuser','App\Http\Controllers\UserController@deleteuser');
Route::post("/action/userestatus",'App\Http\Controllers\UserController@userestatus');

//<--adnim musican/artist------>
Route::post('admin/artist-list','App\Http\Controllers\artistController@adminartistlist')->name("admin/artist-list");


//Subscription
Route::get('/admin-subscription','App\Http\Controllers\subscriptionController@subscription');
Route::get('/admin-subscribers','App\Http\Controllers\subscriptionController@subscribers');
Route::get('/admin-payments','App\Http\Controllers\subscriptionController@payments');


//manage content
Route::get('/admin-about-us','App\Http\Controllers\managecontentController@aboutus');
Route::get('/admin-contenct-us','App\Http\Controllers\managecontentController@contenctus');
Route::get('/home','App\Http\Controllers\managecontentController@home');



//admin profile logout
Route::get('/admin-my-profile','App\Http\Controllers\adminController@myprofile');
Route::get('/admin-logout','App\Http\Controllers\adminController@logout');
