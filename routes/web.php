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

    //=================== Department ========================//
	Route::get('admin/department/index', 'Admin\DepartmentController@index');
	Route::get('admin/department/create', 'Admin\DepartmentController@create');
	Route::post('admin/department/store', 'Admin\DepartmentController@store');
	Route::get('admin/department/edit/{id}', 'Admin\DepartmentController@edit');
	Route::post('admin/department/update/{id}', 'Admin\DepartmentController@update');
	Route::get('admin/department/delete/{id}', 'Admin\DepartmentController@destroy');

});


// frontend routes
Route::get('/', 'FrontendController@home');
Route::get('/about-us', 'FrontendController@aboutUs');
Route::get('/contact', 'FrontendController@contact');
Route::get('/administrative', 'FrontendController@administrative');
Route::get('/faculty', 'FrontendController@faculty');
Route::get('/chairman-message', 'FrontendController@chairman');
Route::get('/principal-message', 'FrontendController@principal');
Route::get('/academic', 'FrontendController@academic');
Route::get('facilities/lab', 'FrontendController@lab');
Route::get('facilities/hostel', 'FrontendController@hostel');
Route::get('facilities/scholarship', 'FrontendController@scholarship');
Route::get('facilities/job', 'FrontendController@job');

Route::get('/admission/admission-circular', 'FrontendController@admissionCircular');
Route::get('/admission/admission-form', 'FrontendController@admissionForm');
Route::get('/admission/admission-requirement', 'FrontendController@admissionRequirement');
Route::get('/admission/prospectus', 'FrontendController@prospectus');
Route::get('/admission/fee', 'FrontendController@fee');

Route::get('/department/{department_slug}', 'FrontendController@department');
Route::get('/admission', 'FrontendController@admission');

Route::get('/gallery/{type}', 'FrontendController@gallery');

// templates for dynamic cairo_pattern_get_surface(pattern)
Route::get('/notice', function() { return view('frontend.notice');});
Route::get('/downloadList', function() { return view('frontend.dynamic.downloadList');});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
