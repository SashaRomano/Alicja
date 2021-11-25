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

Route::redirect('/','/uk');

Route::get('/{language}', 'IndexController@start')->name('index');

Route::get('certificates/{language}', 'SimpleController@certificates')->name('certificates');

Route::get('courses/{language}', 'CoursesController@show')->name('courses');

Route::get('intensive/{language}', 'SimpleController@intensive')->name('intensive');

Route::get('online/{language}', 'SimpleController@online')->name('online');

Route::get('contacts/{language}', 'SimpleController@contacts')->name('contacts');

// Admin Panel

Route::get('admin/{language}', 'SimpleController@admin')->name('admin');

Route::get('admin/edit-main/{language}', 'AdminIndexController@show')->name('edit-main-get');

Route::post('admin/edit-main/{language}', 'AdminIndexController@edit_save')->name('edit-main-post');

Route::get('admin/admin-courses/{language}', 'AdminCoursesController@show')->name('admin-courses-get');

Route::get('admin/add-course/{language}', 'AdminCoursesController@add')->name('add-course-get');

Route::post('admin/add-course/{language}', 'AdminCoursesController@add_save')->name('add-course-post');

Route::get('admin/edit-course/{id}/{language}', 'AdminCoursesController@edit')->name('edit-course-get');

Route::post('admin/edit-course/{id}/{language}', 'AdminCoursesController@edit_save')->name('edit-course-post');


// My

Route::get('/my/save-req/{language}', 'ReqController@show')->name('save-req-get');

Route::post('/my/save-req/{language}', 'ReqController@save')->name('save-req-post');

Route::get('/my/success/{language}', 'ReqController@success')->name('req-success');

// Auth

Auth::routes();

Route::get('home/{language}', 'HomeController@index')->name('home');
