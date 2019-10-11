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


Route::get('/', 'LoginController@login')->name('login');
Route::post('/login', 'LoginController@authenticate');
Route::get('/logout', 'LoginController@logout');

Route::middleware('auth')->group(function() {
	Route::get('/subjects', 'SubjectsController@index');
	Route::get('/subjects/add', 'SubjectsController@add');
	Route::post('/subjects/store', 'SubjectsController@store');

	Route::get('/strands', 'StrandsController@index');
	Route::get('/strands/add', 'StrandsController@add');
	Route::post('/strands/store', 'StrandsController@store');

	Route::get('/teachers', 'TeachersController@index');
	Route::get('/teachers/add', 'TeachersController@add');
	Route::post('/teachers/store', 'TeachersController@store');

	Route::get('/sections', 'SectionsController@index');
	Route::get('/sections/add', 'SectionsController@add');
	Route::post('/sections/store', 'SectionsController@store');

	Route::get('/subject_strands', 'SubjectStrandsController@index');
	Route::get('/subject_strands/add', 'SubjectStrandsController@add');
	Route::post('/subject_strands/store', 'SubjectStrandsController@store');
});