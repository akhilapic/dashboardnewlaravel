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

Route::get('/form', function () {
    //return view('welcome');
	return view('admin.userform');
});

Route::get('admin/dashboard', 'App\Http\Controllers\dashboardController@dashboard')->name("admin/dashboard");

Route::get('/booking-list', 'App\Http\Controllers\bookingController@bookinglist')->name("booking-list");

//check new user email address check  exist or not
Route::post("action/checkuseremail",'App\Http\Controllers\UserController@checkuseremail');

Route::post("action/checkuserphone",'App\Http\Controllers\UserController@checkuserphone');
//user 
Route::get('/admin/newuser', 'App\Http\Controllers\UserController@newuser')->name("admin/newuser");
Route::get('/admin/User-list', 'App\Http\Controllers\UserController@userlist')->name("admin/User-list");

Route::post('/action/newuser','App\Http\Controllers\UserController@saveuser');


//<--adnim musican/artist------>
Route::get('admin/artist-list','App\Http\Controllers\artistController@adminartistlist')->name("admin/artist-list");


//Subscription
Route::get('/admin-subscription','App\Http\Controllers\subscriptionController@subscription')->name("admin-subscription");
Route::get('/admin-subscribers','App\Http\Controllers\subscriptionController@subscribers')->name("admin-subscribers");
Route::get('/admin-payments','App\Http\Controllers\subscriptionController@payments')->name("admin-payments");


//manage content
Route::get('/admin-about-us','App\Http\Controllers\managecontentController@aboutus')->name("admin-about-us");
Route::get('/admin-contenct-us','App\Http\Controllers\managecontentController@contenctus')->name("admin-contenct-us");
Route::get('/home','App\Http\Controllers\managecontentController@home')->name("home");



//admin profile logour
Route::get('/admin-my-profile','App\Http\Controllers\adminController@myprofile')->name("admin-my-profile");
Route::get('/admin-logout','App\Http\Controllers\adminController@logout')->name("admin-logout");
