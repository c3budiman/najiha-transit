<?php
use App\moda;
use App\terminalstasiun;
use App\angkot;
use App\bus;
use App\komentar;
use App\user;
use App\berita;
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

Route::get('/tampilanlama', function () {
    return view('index', ['moda' => moda::all(), 'lokasi' => terminalstasiun::all(), 'angkot' => angkot::all(), 'bus' => bus::all(), 'komentar' => komentar::orderBy('id', 'desc')->simplePaginate(5)]);
});
Route::get('/', function () {
    return view('layananinformasiv2', ['moda' => moda::orderBy('jenis','asc')->get(), 'angkot' => angkot::orderBy('nama','asc')->get(), 'bus' => bus::all(), 'komentar' => komentar::orderBy('index', 'asc')->simplePaginate(5), 'hitungangkot' => angkot::count(), 'hitungbus' => bus::count(), 'hitungstasiun' => terminalstasiun::where('jenis','LIKE',"%Stasiun%")->count(), 'hitungterminal' => terminalstasiun::where('jenis','LIKE',"%Terminal%")->count(), 'terminal' => terminalstasiun::where('jenis','LIKE',"%Terminal%")->get(), 'stasiun' => terminalstasiun::where('jenis','LIKE',"%Stasiun%")->get(), 'berita' => berita::orderBy('updated_at','asc')->paginate(30)]);
});

Route::get('/moda', function () {
    return view('moda', ['moda' => moda::orderBy('jenis','asc')->get(), 'angkot' => angkot::orderBy('nama','asc')->get(), 'bus' => bus::orderBy('nama','asc')->get(), 'komentar' => komentar::orderBy('index', 'asc')->simplePaginate(5), 'hitungangkot' => angkot::count(), 'hitungbus' => bus::count(), 'hitungstasiun' => terminalstasiun::where('jenis','LIKE',"%Stasiun%")->count(), 'hitungterminal' => terminalstasiun::where('jenis','LIKE',"%Terminal%")->count(), 'terminal' => terminalstasiun::where('jenis','LIKE',"%Terminal%")->get(), 'stasiun' => terminalstasiun::where('jenis','LIKE',"%Stasiun%")->get(), 'berita' => berita::orderBy('updated_at','asc')->paginate(30)]);
    
});

Route::get('/moda-{jenis}', function ($jenis) {
   return view('moda', ['moda' => moda::orderBy('jenis','asc')->get(), 'angkot' => angkot::orderBy('nama','asc')->get(), 'bus' => bus::orderBy('nama','asc')->get(), 'komentar' => komentar::orderBy('index', 'asc')->simplePaginate(5), 'hitungangkot' => angkot::count(), 'hitungbus' => bus::count(), 'hitungstasiun' => terminalstasiun::where('jenis','LIKE',"%Stasiun%")->count(), 'hitungterminal' => terminalstasiun::where('jenis','LIKE',"%Terminal%")->count(), 'terminal' => terminalstasiun::where('jenis','LIKE',"%Terminal%")->get(), 'stasiun' => terminalstasiun::where('jenis','LIKE',"%Stasiun%")->get(), 'berita' => berita::orderBy('updated_at','asc')->paginate(30)]);
})->where('jenis', 'angkot|bus|terminal|stasiun');

Route::get("index",'komentarcontroller@index');
Route::post("store", 'komentarcontroller@save_data');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

// Secure Routes
Route::group(['middleware' => ['auth']],function(){

	Route::get('/admin/rangkuman', 'RangkumanController@index');
	Route::get('/home', 'HomeController@index')->name('home');

	Route::get('admin/filepeta', 'FileController@indexpeta');
	Route::get('admin/filegambar', 'FileController@indexgambar');
	Route::post('admin/upload/file', 'FileController@uploadpeta')->name('file.upload');
	Route::post('admin/upload/gambar', 'FileController@uploadgambar')->name('gambar.upload');
	Route::get('admin/file/upload', 'FileController@form')->name('file.form');
	Route::get('/delete/peta/{id}', 'FileController@destroy');
	Route::get('/delete/gambar/{id}', 'FileController@destroy');

	Route::get('admin/pengguna', 'UserController@index');
	Route::get('/delete/akun/{id}', 'UserController@destroy');

	Route::get('admin/komentar', 'KomentarController@index');
	Route::get('/delete/komentar/{id}', 'KomentarController@destroy');

	Route::get('admin/moda', 'ModaController@index');
	Route::post('/admin/moda/store', 'ModaController@save_data');
	Route::get('/delete/moda/{id}', 'ModaController@destroy');

	Route::get('admin/angkot', 'AngkotController@index');
	Route::patch('/admin/angkot/update','AngkotController@update')->name('angkot.update');
	Route::post('/admin/angkot/store', 'AngkotController@save_data');
	Route::get('/delete/angkot/{id}', 'AngkotController@destroy');

	Route::get('admin/bus', 'BusController@index');
	Route::patch('/admin/bus/update','BusController@update')->name('bus.update');
	Route::post('/admin/bus/store', 'BusController@save_data');
	Route::get('/delete/bus/{id}', 'BusController@destroy');

	Route::get('admin/lokasi', 'LokasiController@index');
	Route::patch('/admin/lokasi/update','LokasiController@update')->name('lokasi.update');
	Route::post('/admin/lokasi/store', 'LokasiController@save_data');
	Route::get('/delete/lokasi/{id}', 'LokasiController@destroy');
	
	Route::get('admin/berita','BeritaController@index');
	Route::patch('/admin/berita/update','BeritaController@update')->name('berita.update');
	Route::post('/admin/berita/store','BeritaController@save_data');
	Route::get('/delete/berita/{id}', 'BeritaController@destroy');
});

Route::get('/admin', 'HomeController@index')->name('home');
