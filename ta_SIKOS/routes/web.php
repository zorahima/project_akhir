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
//router home
Route::get('/', function () {
	return view('master');
});

//route untuk book online
Route::get('bookonline', function () {
	return view('bookonline');
});

//route untuk contact
Route::get('contact', function () {
	return view('contact');
});

//auth
Auth::routes();

//routing untuk user
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout'); //untuk logout

//routing untuk admin
//Route::get('/admin', 'AdminController@index')->name('admin.index');

//routing untuk login admin
Route::prefix('admin')->group(function() {
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.index');
	Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
	//routing untuk semua fungsi dalam manageadmincontroller
	Route::resource('manageadmins', 'ManageAdminController');
	Route::resource('manageusers', 'ManageUserController');
	Route::resource('managepesanans', 'ManagePesananController');
});

//routing untuk upload
Route::get('upload',['as'=>'upload.index','uses'=>'UploadController@index']);
Route::get('upload/create',['as'=>'upload.create','uses'=>'UploadController@create']);
Route::post('upload',['as'=>'upload.store','uses'=>'UploadController@store']);

//route untuk pesanan
Route::get('pesanan',['as'=>'pesanan.index','uses'=>'PesananController@index']);
Route::get('pesanan/create',['as'=>'pesanan.create','uses'=>'PesananController@create']);
Route::post('pesanan',['as'=>'pesanan.store','uses'=>'PesananController@store']);




