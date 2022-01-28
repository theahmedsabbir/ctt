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


Route::get('cache', function() {

   Artisan::call('cache:clear');
   Artisan::call('config:clear');
   Artisan::call('config:cache');
   Artisan::call('view:clear');

   return "Cleared!";

});
Route::get('flush', function() {

   session()->flush();

   Artisan::call('cache:clear');
   Artisan::call('config:clear');
   Artisan::call('config:cache');
   Artisan::call('view:clear');

   return "Flushed!";

});




// admin routes 

Route::get('/admin/login', 'Admin\AdminController@showLoginForm');
Route::post('/admin/login', 'Admin\AdminController@login');

//admin route required for frontend
Route::post('admin/installer/store', 'Admin\InstallerController@store');

Route::group(['middleware' => ['admin']], function(){
	Route::get('/admin/dashboard', 'Admin\AdminController@dashboard');
	Route::post('/admin/logout', 'Admin\AdminController@logout');

	// pattern
	Route::get('admin/pattern/index', 'Admin\PatternController@index');
	Route::get('admin/pattern/create', 'Admin\PatternController@create');
	Route::post('admin/pattern/store', 'Admin\PatternController@store');
	Route::get('admin/pattern/edit/{id}', 'Admin\PatternController@edit');
	Route::post('admin/pattern/update/{id}', 'Admin\PatternController@update');
	Route::post('admin/pattern/delete/{id}', 'Admin\PatternController@delete');
	Route::get('admin/pattern/image/{id}', 'Admin\PatternController@image');
	Route::post('admin/pattern/image/update', 'Admin\PatternController@imageUpdate');

});


// frontend routes
Route::get('/', 'FrontendController@home');


Auth::routes();



