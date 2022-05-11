<?php

use Illuminate\Support\Facades\Route;

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
    return view('MenuUtama.index');
});

Route::get('/index', function () {
    return view('MenuUtama.index');
});

Route::get('/menu', function () {
    return view('/menu');
});

Route::get('/coba', function () {
    return view('/coba');
});

Route::get('/karyaterbaik', function () {
    return view('Opi.karyaterbaik');
});

Route::get('/karyaterbaiksudirman', function () {
    return view('Sudirman.karyaterbaiksudirman');
});

Route::get('/insterbaik', function () {
    return view('Opi.insterbaik');
});

Route::get('/insfavsudirman', function () {
    return view('Sudirman.insfavsudirman');
});

Route::get('/staffterbaik', function () {
    return view('Opi.staffterbaik');
});

Route::get('/stafffavsdrm', function () {
    return view('Sudirman.stafffavsdrm');
});

Route::get('/terbaiksudirman', function () {
    return view('Sudirman.terbaiksudirman');
});

Route::get('/siswaterbaiksdrm1', function () {
    return view('Sudirman.siswaterbaiksdrm1');
});

Route::get('/siswaterbaiksdrm2', function () {
    return view('Sudirman.siswaterbaiksdrm2');
});

Route::get('/siswaterbaiksdrm3', function () {
    return view('Sudirman.siswaterbaiksdrm3');
});


Route::get('/lihat','OpiController@index')->middleware('auth');
Route::get('/rumah','OpiController@rumah')->middleware('auth');
Route::get('/terbaikopi','OpiController@terbaikopi')->middleware('auth');
Route::get('/dftrterbaikopi','OpiController@dftrterbaikopi')->middleware('auth');
Route::get('/siswaterbaikopi/{nilai}','OpiController@siswaterbaikopi');
Route::get('/cariopi','OpiController@cariopi')->middleware('auth');
Route::get('/tambahopi','OpiController@create')->middleware('auth');
Route::post('/tambadatahopi','OpiController@store')->middleware('auth');
Route::get('/detail/{opi}','OpiController@show')->middleware('auth');
Route::delete('/lihat/{opi}','OpiController@destroy')->middleware('auth');
Route::get('/detail/{opi}/edit','OpiController@edit')->middleware('auth');
Route::patch('/detail/{opi}','OpiController@update')->middleware('auth');
Route::get('/lihat/filter','OpiController@filter')->middleware('auth');
Route::get('/daftaropi','OpiController@daftar');
Route::get('/daftarangkatanopi/{angkatan}','OpiController@daftarangkatan');
Route::get('/angkatanopi/{angkatan}','OpiController@angkatanopi');

Route::get('/lihatsudirman','SudirmanController@index')->middleware('auth');
Route::get('/tambahsudirman','SudirmanController@create')->middleware('auth');
//Route::get('/terbaiksudirman','SudirmanController@terbaiksudirman')->middleware('auth');
//Route::get('/siswaterbaiksdrm/{nilai}','SudirmanController@siswaterbaiksdrm');
Route::post('/tambahdatasudirman','SudirmanController@store')->middleware('auth');
Route::get('/detailsudirman/{sudirman}','SudirmanController@show');
Route::delete('/lihatsudirman/{sudirman}','SudirmanController@destroy')->middleware('auth');
Route::get('/detailsudirman/{sudirman}/edit','SudirmanController@edit')->middleware('auth');
Route::patch('/detailsudirman/{sudirman}','SudirmanController@update')->middleware('auth');
Route::get('/menusudirman','SudirmanController@daftar');
Route::get('/daftarsudirman/{angkatan}','SudirmanController@daftarangkatan');
Route::get('/angkatansudirman/{angkatan}','SudirmanController@angkatansudirman');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
