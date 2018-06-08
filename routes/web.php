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

Route::get('/', function() {
	return redirect()->route('dashboard.index');
});

Route::resource('/dashboard','DashboardController');

// Admin

Route::resource('/menu/asset','AssetController');

Route::get('/menu/asset/document/{asset}','AssetController@integrationShow')->name('asset.integrationShow');

Route::post('/menu/asset/document/{asset}/store','AssetController@integrationStore')->name('asset.integrationStore');

Route::post('/menu/asset/document/delete','AssetController@integrationDestroy')->name('asset.integrationDestroy');

Route::post('/menu/asset/document/attachment','AssetController@integrationAttachment')->name('asset.integrationAttachment');

Route::resource('/menu/category','CategoryController');

Route::resource('/menu/region','RegionController');

Route::resource('/menu/certificate','CertificateController');

Route::resource('/menu/user','UserController');

// User

Route::get('/asset','AssetController@userIndex')->name('asset.userIndex');

Route::get('/asset/{asset}','AssetController@userShow')->name('asset.userShow');

Route::get('/certificate','CertificateController@userIndex')->name('certificate.userIndex');

Route::get('/certificate/{certificate}','CertificateController@userShow')->name('certificate.userShow');

Route::get('/category','CategoryController@userIndex')->name('category.userIndex');

Route::get('/category/{category}','CategoryController@userShow')->name('category.userShow');

Route::get('/region','RegionController@userIndex')->name('region.userIndex');

Route::get('/region/{region}','RegionController@userShow')->name('region.userShow');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user/profile','UserController@profile')->name('user.profile');