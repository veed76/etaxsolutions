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
    return view('front_page.home');
})->name('root');

Auth::routes();

Route::get('/home',function(){
    $is_admin = \Auth::User()->role;
    if($is_admin == 'admin'){
        return redirect("admin");
    }else{
        return redirect("dashboard");
    }
});

Route::group(['middleware' => 'auth'], function () {

	// Admin Group
	Route::group(['prefix' => 'admin'], function () {
		// Admin Dashboard
		Route::match(['get'], '/', 'Admin\Dashboard@index')->name('admin.dashboard');

		// Latest News
		Route::match(['get'], '/latestNews', 'Admin\Dashboard@listLatestNews')->name('admin.listLatestNews');
		Route::match(['get','post'], '/latestNews/save/{id?}', 'Admin\Dashboard@saveLatestNews')->name('admin.latestNews.create');

		// Taluka
		Route::match(['get'], '/taluka', 'Admin\Dashboard@listTaluka')->name('admin.listTaluka');
		Route::match(['get','post'], '/taluka/save/{id?}', 'Admin\Dashboard@saveTaluka')->name('admin.taluka.save');
		Route::match(['get','post'], '/talukaDistrict', 'Admin\Dashboard@districtAjax')->name('admin.taluka.districtAjax');
		Route::match(['get'], '/talukaJson', 'Admin\Dashboard@talukaJson')->name('admin.talukaJson');

		//Levels
	});
});

Route::get('flush', function(){
    request()->session()->flush();
});