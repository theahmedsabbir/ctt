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

Route::get('/admin/login', 'Admin\AdminController@showLoginForm')->name('admin');
Route::get('/teacher/login', 'Admin\AdminController@showLoginForm')->name('teacher');
Route::get('/student/login', 'Admin\AdminController@showLoginForm')->name('student');
Route::get('/stuff/login', 'Admin\AdminController@showLoginForm')->name('stuff');
Route::post('/admin/login', 'Admin\AdminController@login');

Route::group(['middleware' => ['admin']], function(){

	Route::get('/admin/dashboard', 'Admin\AdminController@dashboard');
	Route::post('/admin/logout', 'Admin\AdminController@logout');

	Route::group(['middleware' => ['check_role']], function(){

	    //=================== Role ========================//
		Route::get('admin/role/index', 'Admin\RoleController@index');
		Route::post('admin/role/update/{id}', 'Admin\RoleController@update');

	    //=================== Department ========================//
		Route::get('admin/department/index', 'Admin\DepartmentController@index');
		Route::get('admin/department/create', 'Admin\DepartmentController@create');
		Route::post('admin/department/store', 'Admin\DepartmentController@store');
		Route::get('admin/department/edit/{id}', 'Admin\DepartmentController@edit');
		Route::post('admin/department/update/{id}', 'Admin\DepartmentController@update');
		Route::get('admin/department/delete/{id}', 'Admin\DepartmentController@destroy');

	    //=================== Teacher ========================//
		Route::get('admin/teacher/index', 'Admin\TeacherController@index');
		Route::get('admin/teacher/create', 'Admin\TeacherController@create');
		Route::post('admin/teacher/store', 'Admin\TeacherController@store');
		Route::get('admin/teacher/edit/{id}', 'Admin\TeacherController@edit');
		Route::post('admin/teacher/update/{id}', 'Admin\TeacherController@update');
		Route::get('admin/teacher/delete/{id}', 'Admin\TeacherController@destroy');

	    //=================== Stuff ========================//
		Route::get('admin/stuff/index', 'Admin\TeacherController@stuff_index');
		Route::get('admin/stuff/create', 'Admin\TeacherController@stuff_create');
		Route::post('admin/stuff/store', 'Admin\TeacherController@stuff_store');
		Route::get('admin/stuff/edit/{id}', 'Admin\TeacherController@stuff_edit');
		Route::post('admin/stuff/update/{id}', 'Admin\TeacherController@stuff_update');
		Route::get('admin/stuff/delete/{id}', 'Admin\TeacherController@stuff_destroy');

	    //=================== Student ========================//
		Route::get('admin/student/index', 'Admin\StudentController@index');
		Route::get('admin/student/create', 'Admin\StudentController@create');
		Route::post('admin/student/store', 'Admin\StudentController@store');
		Route::get('admin/student/edit/{id}', 'Admin\StudentController@edit');
		Route::post('admin/student/update/{id}', 'Admin\StudentController@update');
		Route::get('admin/student/delete/{id}', 'Admin\StudentController@destroy');
		Route::post('admin/student/account/{id}', 'Admin\StudentController@accountUpdate');

		//=================== Post ========================//
		Route::get('admin/post/index', 'Admin\FileController@index');
		Route::get('admin/post/create', 'Admin\FileController@create');
		Route::post('admin/post/store', 'Admin\FileController@store');
		Route::get('admin/post/edit/{id}', 'Admin\FileController@edit');
		Route::post('admin/post/update/{id}', 'Admin\FileController@update');
		Route::post('admin/post/delete/{id}', 'Admin\FileController@delete');

		//=================== Account ========================//
		Route::get('admin/account/index', 'Admin\AccountController@index');
		Route::get('admin/account/edit/{id}', 'Admin\AccountController@edit');
		Route::post('admin/account/update/{id}', 'Admin\AccountController@update');
		Route::post('admin/account/delete/{id}', 'Admin\AccountController@delete');

	});



    //=================== Profile ========================//
	Route::get('/admin/profile/edit', 'Admin\AdminController@profileEdit');
	Route::post('admin/profile/update/admin/{id}', 'Admin\AdminController@update');
	Route::post('admin/profile/update/teacher/{id}', 'Admin\TeacherController@update');
	Route::post('admin/profile/update/student/{id}', 'Admin\StudentController@update');
	Route::post('admin/profile/update/stuff/{id}', 'Admin\TeacherController@stuff_update');

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

// search
Route::get('search', 'FrontendController@search');


// dynamic
Route::get('/list/{type}', 'FrontendController@list');
Route::get('/department/{department_slug}', 'FrontendController@department');
Route::get('/academic/{type}', 'FrontendController@list');
Route::get('/admission/{type}', 'FrontendController@list');
Route::get('/gallery/{type}', 'FrontendController@gallery');

// templates for dynamic cairo_pattern_get_surface(pattern)
Route::get('/notice', function() { return view('frontend.notice');});
Route::get('/downloadList', function() { return view('frontend.dynamic.downloadList');});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
