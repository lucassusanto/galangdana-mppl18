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

Route::get('/', 	'GuestController@home');
Route::get('/term', 'GuestController@term');


Route::get('/bayar','KegiatanController@show');

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

Route::get('/users', 'UserController@index');

Route::post('/galang/{u}/upload'	, 'KegiatanController@store');
Route::get('/transaksi/{u}/delete'	, 'TransaksiController@destroy');

Route::get('/verifikasi', function () {
    return view('verifikasiakun');
});


Route::get('cariuser', 		'AdminController@search');
Route::get('caricampaign', 	'AdminController@searchCampaign');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', function(){
	Auth::logout();
	return redirect('/');
});

Route::prefix('admin')->group(function() {
	Route::get ('/'							, 'AdminController@index');
	Route::get ('campaign'					, 'AdminController@indexCampaign');
	Route::get ('campaign/{u}/verifikasi'	, 'AdminController@showCampaign');
	Route::get ('donasi'					, 'AdminController@indexDonasi');
	Route::get ('donasi/{u}/verifikasi'		, 'AdminController@showDonasi');
	Route::get ('{u}/verifikasi'			, 'AdminController@show');

	Route::post('{u}/verifikasi'			, 'AdminController@verifikasi');
	Route::post('campaign/{u}/verifikasi'	, 'AdminController@verifikasiCampaign');
	Route::post('donasi/{u}/verifikasi'		, 'AdminController@verifikasiDonasi');
});

Route::prefix('campaign')->group(function() {
	Route::get ('{u}/updateForm'	, 'KegiatanController@updateForm');
	Route::get ('{u}/achievement'	, 'UserController@achievement');
	Route::get ('{u}/campaign'		, 'UserController@campaign');
	Route::get ('{u}/profil'		, 'UserController@edit');
	Route::get ('{u}/transaksi'		, 'UserController@transaksi');
	Route::get ('{u}/verifikasi'	, 'UserController@view_verifikasi');

	Route::post('{u}/image'			, 'UserController@imageUpload');
	Route::post('{u}/verifikasi'	, 'UserController@verifikasi');
	Route::post('{u}/update'		, 'UserController@update');
	// Route::post('{u}/update'		, 'KegiatanController@update');
});

Route::prefix('donasi')->group(function() {
	Route::get ('/'				, 'KegiatanController@index');
	Route::get ('{u}/cair'		, 'KegiatanController@verifikasicair');
	Route::get ('{u}/delete'	, 'KegiatanController@destroy');
	Route::get ('{u}/detail'	, 'KegiatanController@show');
	Route::get ('{u}/transaksi'	, 'KegiatanController@show2');

	Route::post('{u}/bayar'		, 'TransaksiController@store');
});
