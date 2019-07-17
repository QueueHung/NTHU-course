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
Auth::routes();

Route::get('/', function () {
    return view('.TestIndex');
});

Route::get('/home' , function(){
	return view('.index');
});

Route::get('/buttons' , function(){
	return view('.buttons');
});

Route::get('/Test/schedule' , function(){
	return view('.Test.index');
});

/*
Route::get('/CourseInfo' , function(){
	return view('.CourseInfo');
});
*/

Route::get('/test/test' , function(){
	return view('.Test.test');
});


Route::get('/CourseInfo','CoursesController@show');

Route::post('/AjaxUpdateCourseInfo','CoursesController@Ajaxupdate');

//Route::get('/home', 'HomeController@index')->name('home');
