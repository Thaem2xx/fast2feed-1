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
Route::pattern('id','[0-9]*');
Route::pattern('cid','[0-9]*');
Route::pattern('slug','(.*)');

Route::namespace('f2f')->group(function(){
	Route::get('/',[
		'uses' => 'IndexController@index',
		'as' => 'trangChu'
	]);
	Route::get('/gio-hang',[
		'uses' => 'CartController@index',
		'as' => 'trangGioHang'
	]);
	Route::get('/lien-he',[
		'uses' => 'ContactController@index',
		'as' => 'trangLienHe'
	]);
	Route::get('/danh-muc',[
		'uses' => 'CatController@index',
		'as' => 'trangDanhMuc'
	]);
	Route::get('/nha-hang',[
		'uses' => 'RestauController@index',
		'as' => 'trangNhaHang'
	]);
	Route::get('/index-shipper',[
		'uses' => 'ShipperController@index',
		'as' => 'trangShipper'
	]);
	Route::get('/index-danhsachHD',[
		'uses' => 'DanhSachHDController@index',
		'as' => 'trangDanhSachHD'
	]);
});

Route::namespace('Auth')->group(function(){
	Route::get('/dang-nhap',[
		'uses' => 'LoginController@index',
		'as' => 'trangDangNhap'
	]);
	Route::get('/quen-pass',[
		'uses' => 'ForgotPasswordController@index',
		'as' => 'trangQuenPass'
	]);
	Route::get('/dang-ki',[
		'uses' => 'RegisterController@index',
		'as' => 'trangDangKi'
	]);
});

Route::namespace('Admin')->group(function(){
	Route::get('/admin',[
		'uses' => 'IndexController@index',
		'as' => 'trangChuAdmin'
	]);
	Route::get('/admin/user',[
		'uses' => 'UserController@index',
		'as' => 'userAdmin'
	]);
});