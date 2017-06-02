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

    Route::get('/table', 'AdminController@table')->name('admin.table');
    Route::get('/table/create', 'AdminController@showCreateTable')->name('admin.input');
    Route::post('/table/create/submit', 'AdminController@storeTable')->name('admin.add');
    Route::get('/table/edit-{daftar_kosan}', 'AdminController@showEditTable')->name('admin.editkos');
    Route::put('/table-{daftar_kosan}/update', 'AdminController@updateTable');
    Route::get('/table/delete-{daftar_kosan}', 'AdminController@deleteTable');

    Route::get('/tableadmin', 'AdminController@tableadmin')->name('admin.tableadmin');
    Route::get('/tableadmin/edit-{admins}', 'AdminController@showEditTableAdmin');

    Route::get('/tableuser', 'AdminController@tableuser')->name('admin.tableuser');
});


Route::prefix('/')->group(function () {
    Route::get('/', 'RoomController@index')->name('Home');
    Route::get('home', 'HomeController@index')->name('Login');
    Route::get('Kosan', 'KosController@kosan')->name('Kosan');
    Route::get('Kosan/{id}/detail', 'KosController@kosandetail');
    Route::get('Kosan/{id}/pesan', 'KosController@kosanpesan');
    Route::get('About', 'RoomController@about')->name('About');
    Route::get('Jakarta', 'KosController@showjakarta')->name('Jakarta');
    Route::get('Surabaya', 'KosController@showsurabaya')->name('Surabaya');
    Route::get('Yogyakarta', 'KosController@showyogyakarta')->name('Jogja');
    Route::get('Profile/{user}/edit', 'RoomController@showEditForm');
    Route::put('Profile/{user}/update', 'RoomController@update');

   

});


