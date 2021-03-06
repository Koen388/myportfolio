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

// Route::get('/', function () {
//     return view('./pages/index');
// });

Route::get('/', 'PagesController@home');

Route::get('/contact', 'PagesController@contact');

Route::get('/dashboard', 'CoursesController@dashboard');

Route::get('/opdrachten', 'PagesController@opdrachten');

Route::resource('/assignments', 'AssignmentController');

// Route::get('/courses', 'PagesController@index');