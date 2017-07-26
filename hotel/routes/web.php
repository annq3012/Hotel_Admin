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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix'=>'admin'], function() {
	Route::get('/', function () {
		return view('hotel_admin.index');
	});
	Route::get('/introduction', function () {
		return view('hotel_admin.staticpage.indexIntro');
	});
	Route::get('/category', function () {
		return view('hotel_admin.category.indexCat');
	});
	Route::get('/news', function () {
		return view('hotel_admin.news.indexNews');
	});
	Route::get('/user', function () {
		return view('hotel_admin.user.indexUser');
	});
	Route::group(['prefix'=>'hotel'], function () {
		Route::get('/', function () {
			return view('hotel_admin.hotel.indexHotel');
		});
		Route::get('/room',function () {
			return view('hotel_admin.room.indexRoom');
		});
	});


});

