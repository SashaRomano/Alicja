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

Route::get('courses/{language}', 'SimpleController@courses')->name('courses');

Route::get('intensive/{language}', 'SimpleController@intensive')->name('intensive');

Route::get('online/{language}', 'SimpleController@online')->name('online');

Route::get('contacts/{language}', 'SimpleController@contacts')->name('contacts');

// Admin Panel

Route::get('admin/{language}', 'SimpleController@admin')->name('admin');

Route::get('edit-main/{language}', 'AdminIndexController@show')->name('edit-main-get');

Route::post('edit-main/{language}', 'AdminIndexController@edit_save')->name('edit-main-post');


// Auth

Auth::routes();

Route::get('home/{language}', 'HomeController@index')->name('home');
