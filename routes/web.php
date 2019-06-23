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

Auth::routes();

Route::get('/dashboard/home', 'DashboardController@versionone')->name('home');
Route::get('/datamasuk/datamasuk', 'DatamasukController@datamasuk')->name('datamasuk');
Route::get('/inputdata/inputdata', 'inputdataController@inputdata')->name('inputdata');
Route::get('/inputdata/form01', 'inputdataController@form01')->name('form01');
Route::get('/inputdata/form02', 'inputdataController@form02')->name('form02');
Route::get('/inputdata/form03', 'inputdataController@form03')->name('form03');
Route::get('/inputdata/form04', 'inputdataController@form04')->name('form04');
Route::get('/inputdata/form05', 'inputdataController@form05')->name('form05');
Route::get('/inputdata/form06', 'inputdataController@form06')->name('form06');
Route::get('/inputdata/form07', 'inputdataController@form07')->name('form07');
Route::get('/inputdata/form08', 'inputdataController@form08')->name('form08');
Route::get('/inputdata/form09', 'inputdataController@form09')->name('form09');
Route::get('/inputdata/form10', 'inputdataController@form10')->name('form10');
Route::get('/rekap_lap/rekap_lap', 'RekaplaporanController@rekap_lap')->name('rekap_lap');
Route::get('/rekap_lap/rekap_lap01', 'RekaplaporanController@rekap_lap01')->name('rekap_lap01');
Route::get('/inputdata/lapform01', 'LaporanController@lapform01')->name('lapform01');
Route::get('/inputdata/lapform02', 'LaporanController@lapform02')->name('lapform02');
Route::get('/inputdata/lapform03', 'LaporanController@lapform03')->name('lapform03');
Route::get('/inputdata/lapform04', 'LaporanController@lapform04')->name('lapform04');
Route::get('/inputdata/lapform05', 'LaporanController@lapform05')->name('lapform05');
Route::get('/inputdata/lapform06', 'LaporanController@lapform06')->name('lapform06');
Route::get('/inputdata/lapform07', 'LaporanController@lapform07')->name('lapform07');
Route::get('/inputdata/lapform08', 'LaporanController@lapform08')->name('lapform08');
Route::get('/inputdata/lapform09', 'LaporanController@lapform09')->name('lapform09');
Route::get('/inputdata/lapform10', 'LaporanController@lapform10')->name('lapform10');
Route::get('/dashboard/v2', 'DashboardController@versiontwo')->name('v2');
Route::get('/dashboard/v3', 'DashboardController@versionthree')->name('v3');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
