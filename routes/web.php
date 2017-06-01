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
    return view('users.home');
});



Auth::routes();

Route::get('/home', 'HomeController@index');

Route::prefix('admin')->group(function () {
    Route::get('/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Admin\LoginController@login')->name('admin.login.submitted');
    Route::post('/logout', 'Admin\LoginController@logout')->name('admin.logout');
    Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');
});


Route::prefix('/')->group(function () {
    Route::get('/', 'RoomController@index')->name('Home');
    Route::get('home', 'HomeController@index')->name('Login');
    Route::get('Kosan', 'RoomController@kosan')->name('Kosan');
    Route::get('About', 'RoomController@about')->name('About');
    Route::get('Jakarta', 'RoomController@showjakarta')->name('Jakarta');
    Route::get('Surabaya', 'RoomController@showsurabaya')->name('Surabaya');
    Route::get('Yogyakarta', 'RoomController@showyogyakarta')->name('Jogja');
    Route::get('Profile/{user}/edit', 'RoomController@showEditForm');
    Route::put('Profile/{user}/update', 'RoomController@update');

   

});


