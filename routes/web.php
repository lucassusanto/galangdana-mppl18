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
    return view('home');
});

Route::get('/bayar','KegiatanController@show');

Route::get('/user', function () {
    return view('user');
});
Route::get('/termgalang', function () {
    return view('termgalang');
});

Route::get('/galang', function () {
	if(!Auth::check()){
		return redirect('/register');
	}
	else if(Auth::user()->tipe_user == 0){
		return redirect('/user/'.Auth::user()->id.'/verifikasi');
	}
	else{
    	return view('galang');
	}
});
Route::get('/verifikasi', function () {
    return view('verifikasiakun');
});
Route::get('/user/{u}/profil', 'UserController@edit');
Route::post('/user/{u}/update', 'UserController@update');
Route::post('/user/{u}/image','UserController@imageUpload');
Route::get('/user/{u}/transaksi', 'UserController@transaksi');
Route::get('/user/{u}/verifikasi', function(){
	return view('verifikasiakun');
});
Route::post('/user/{u}/verifikasi', 'UserController@verifikasi');
Route::get('/user/{u}/campaign','UserController@campaign');

Route::get('/donasi/{u}/detail', 'KegiatanController@show');
Route::get('/donasi/{u}/transaksi', 'KegiatanController@show2');
Route::post('/donasi/{u}/bayar', 'TransaksiController@store');
Route::get('/donasi', 'KegiatanController@index');
Route::post('/galang/{u}/upload', 'KegiatanController@store');
Route::get('/donasi/{u}/cair', 'KegiatanController@verifikasicair');
Route::get('/donasi/{u}/delete', 'KegiatanController@destroy');
Route::get('/transaksi/{u}/delete', 'TransaksiController@destroy');


Route::get('/campaign/{u}/updateForm', 'KegiatanController@updateForm');
Route::post('/campaign/{u}/update', 'KegiatanController@update');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', function(){
	Auth::logout();
	return redirect('/');
});

Route::get('/admin', 'AdminController@index');
Route::get('/admin/campaign', 'AdminController@indexCampaign');
Route::get('/admin/donasi', 'AdminController@indexDonasi');
Route::get('/admin/{u}/verifikasi', 'AdminController@show');
Route::get('/admin/campaign/{u}/verifikasi', 'AdminController@showCampaign');
Route::get('/admin/donasi/{u}/verifikasi', 'AdminController@showDonasi');
Route::post('/admin/{u}/verifikasi', 'AdminController@verifikasi');
Route::post('/admin/campaign/{u}/verifikasi', 'AdminController@verifikasiCampaign');
Route::post('/admin/donasi/{u}/verifikasi', 'AdminController@verifikasiDonasi');
Route::get('cariuser',"AdminController@search");
Route::get('caricampaign',"AdminController@searchCampaign");