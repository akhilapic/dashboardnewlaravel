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
    return view('admin.welcome');
});


Route::get('/job-list', 'App\Http\Controllers\jobController@joblist')->name("job-list");
Route::get('/new-job', 'App\Http\Controllers\jobController@addjob')->name("new-job");
Route::get('/jobs-page', 'App\Http\Controllers\jobController@jobspage')->name("jobs-page");
Route::get('/job-view', 'App\Http\Controllers\jobController@jobview')->name("job-view");
Route::get('/job-application', 'App\Http\Controllers\jobController@jobapplication')->name("job-application");
Route::get('/apply-job', 'App\Http\Controllers\jobController@applyjob')->name("apply-job");
Route::get('/new-job', 'App\Http\Controllers\jobController@newjob')->name("new-job");
Route::get('/user-profile', 'App\Http\Controllers\jobController@userprofile')->name("user-profile");

Route::get('/app-profile', 'App\Http\Controllers\AppController@appprofile')->name("app-profile");
Route::get('/post-details', 'App\Http\Controllers\AppController@postdetails')->name("post-details");

Route::get('/email-compose', 'App\Http\Controllers\AppController@emailcompose')->name("email-compose");
Route::get('/email-inbox', 'App\Http\Controllers\AppController@emailinbox')->name("email-inbox");

Route::get('/email-read', 'App\Http\Controllers\AppController@emailread')->name("email-read");

Route::get('/login', 'App\Http\Controllers\AppController@userprofile')->name("login");


Route::get('/app-calender', 'App\Http\Controllers\AppController@appcalender')->name("app-calender");
Route::get('/ecom-product-grid', 'App\Http\Controllers\AppController@ecomproductgrid')->name("ecom-product-grid");
Route::get('/ecom-product-list', 'App\Http\Controllers\AppController@ecomproductlist')->name("ecom-product-list");
Route::get('/ecom-product-detail', 'App\Http\Controllers\AppController@ecomproductdetail')->name("ecom-product-detail");

Route::get('/ecom-product-order', 'App\Http\Controllers\AppController@ecomproductorder')->name("ecom-product-order");
Route::get('/ecom-checkout', 'App\Http\Controllers\AppController@ecomcheckout')->name("ecom-checkout");

Route::get('/ecom-invoice', 'App\Http\Controllers\AppController@ecominvoice')->name("ecom-invoice");

Route::get('/ecom-customers','App\Http\Controllers\AppController@ecomcustomers')->name("ecom-customers");



//<--Chats------>
Route::get('/chart-flot','App\Http\Controllers\ChatController@chartflot')->name("chart-flot");
Route::get('/chart-morris','App\Http\Controllers\ChatController@chartmorris')->name("chart-morris");
Route::get('/chart-chartjs','App\Http\Controllers\ChatController@chartchartjs')->name("chart-chartjs");
Route::get('/chart-chartist','App\Http\Controllers\ChatController@chartchartist')->name("chart-chartist");
Route::get('/chart-sparkline','App\Http\Controllers\ChatController@chartsparkline')->name("chart-sparkline");
Route::get('/chart-peity','App\Http\Controllers\ChatController@chartpeity')->name("chart-peity");

//Bootstrap
Route::get('/ui-accordion','App\Http\Controllers\bootstrapController@accordion')->name("ui-accordion");
Route::get('/ui-alert','App\Http\Controllers\bootstrapController@alert')->name("ui-alert");
Route::get('/ui-badge','App\Http\Controllers\bootstrapController@badge')->name("ui-badge");
Route::get('/ui-button','App\Http\Controllers\bootstrapController@button')->name("ui-button");
Route::get('/ui-modal','App\Http\Controllers\bootstrapController@modal')->name("ui-modal");
Route::get('/ui-button-group','App\Http\Controllers\bootstrapController@buttongroup')->name("ui-button-group");
Route::get('/ui-list-group','App\Http\Controllers\bootstrapController@listgroup')->name("ui-list-group");
Route::get('/ui-card','App\Http\Controllers\bootstrapController@cards')->name("ui-card");
Route::get('/ui-carousel','App\Http\Controllers\bootstrapController@carousel')->name("ui-carousel");
Route::get('/ui-dropdown','App\Http\Controllers\bootstrapController@dropdown')->name("ui-dropdown");
Route::get('/ui-popover','App\Http\Controllers\bootstrapController@popover')->name("ui-popover");
Route::get('/ui-progressbar','App\Http\Controllers\bootstrapController@progressbar')->name("ui-progressbar");
Route::get('/ui-tab','App\Http\Controllers\bootstrapController@tab')->name("ui-tab");
Route::get('/ui-typography','App\Http\Controllers\bootstrapController@typography')->name("ui-typography");
Route::get('/ui-pagination','App\Http\Controllers\bootstrapController@pagination')->name("ui-pagination");
Route::get('/ui-grid','App\Http\Controllers\bootstrapController@grid')->name("ui-grid");


//plugin
Route::get('/uc-select2','App\Http\Controllers\ucController@select2')->name("uc-select2");
Route::get('/uc-nestable','App\Http\Controllers\ucController@nestable')->name("uc-nestable");
Route::get('/uc-noui-slider','App\Http\Controllers\ucController@nouislider')->name("uc-noui-slider");
Route::get('/uc-sweetalert','App\Http\Controllers\ucController@sweetalert')->name("uc-sweetalert");
Route::get('/uc-toastr','App\Http\Controllers\ucController@toastr')->name("uc-toastr");
Route::get('/map-jqvmap','App\Http\Controllers\ucController@mapjqvmap')->name("map-jqvmap");
Route::get('/uc-lightgallery','App\Http\Controllers\ucController@lightgallery')->name("uc-lightgallery");


//widget-basic
Route::get('/widget-basic','App\Http\Controllers\widgetController@widgetbasic')->name("widget-basic");

//form
Route::get('/form-element','App\Http\Controllers\formController@formelement')->name("form-element");
Route::get('/form-wizard','App\Http\Controllers\formController@formwizard')->name("form-wizard");
Route::get('/form-ckeditor','App\Http\Controllers\formController@formckeditor')->name("form-ckeditor");
Route::get('/form-pickers','App\Http\Controllers\formController@formpickers')->name("form-pickers");
Route::get('/form-validation','App\Http\Controllers\formController@formvalidation')->name("form-validation");


//table
Route::get('/table-bootstrap-basic','App\Http\Controllers\tableController@tablebootstrapbasic')->name("table-bootstrap-basic");
Route::get('/table-datatable-basic','App\Http\Controllers\tableController@tabledatatablebasic')->name("table-datatable-basic");